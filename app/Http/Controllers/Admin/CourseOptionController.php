<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\City;
use App\Models\CourseType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class CourseOptionController extends Controller
{
    private function model(string $option): string { return match($option) {'types'=>CourseType::class,'cities'=>City::class,'branches'=>Branch::class,default=>abort(404)}; }
    private function title(string $option): string { return match($option) {'types'=>'Course Type','cities'=>'District / City','branches'=>'Branch',default=>abort(404)}; }

    public function index(string $option): View
    {
        $model=$this->model($option);
        $items=$model::query()->when($option==='branches',fn($q)=>$q->with('city'))->latest()->paginate(15);
        return view('admin.courses.options',compact('option','items')+['title'=>$this->title($option),'cities'=>City::where('is_active',true)->orderBy('name')->get()]);
    }

    public function store(Request $request,string $option): RedirectResponse
    {
        $model=$this->model($option); $data=$this->validateData($request,$option);
        if($option==='types'&&$request->hasFile('image'))$data['image']=$request->file('image')->store('course-types','public');$data['is_active']=$request->boolean('is_active'); $model::create($data);
        return back()->with('status',$this->title($option).' added successfully.');
    }

    public function update(Request $request,string $option,int $id): RedirectResponse
    {
        $model=$this->model($option); $item=$model::findOrFail($id); $data=$this->validateData($request,$option,$item);
        if($option==='types'&&$request->hasFile('image')){if($item->image)Storage::disk('public')->delete($item->image);$data['image']=$request->file('image')->store('course-types','public');}$data['is_active']=$request->boolean('is_active'); $item->update($data);
        return back()->with('status',$this->title($option).' updated successfully.');
    }

    public function destroy(string $option,int $id): RedirectResponse
    {
        $model=$this->model($option);
        try { $model::findOrFail($id)->delete(); } catch (\Throwable) { return back()->withErrors(['delete'=>'This item is being used by a course and cannot be deleted.']); }
        return back()->with('status',$this->title($option).' deleted successfully.');
    }

    private function validateData(Request $request,string $option,?Model $item=null): array
    {
        $table=match($option){'types'=>'course_types','cities'=>'cities','branches'=>'branches'};
        $rules=['name'=>['required','string','max:255',Rule::unique($table)->ignore($item?->id)]];if($option==='types')$rules['image']=['nullable','image','max:2048'];
        if($option==='branches'){$rules['city_id']=['required','exists:cities,id'];$rules['address']=['nullable','string','max:1000'];$rules['name']=['required','string','max:255',Rule::unique('branches')->where(fn($q)=>$q->where('city_id',$request->city_id))->ignore($item?->id)];}
        return $request->validate($rules);
    }
}
