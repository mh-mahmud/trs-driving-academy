<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\City;
use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
class CourseController extends Controller
{
    public function index(): View { return view('admin.courses.index',['courses'=>Course::with(['type','city','branch'])->latest()->paginate(15)]); }
    public function create(): View { return view('admin.courses.create',['types'=>CourseType::where('is_active',true)->orderBy('name')->get(),'cities'=>City::where('is_active',true)->orderBy('name')->get(),'branches'=>Branch::where('is_active',true)->with('city')->orderBy('name')->get()]); }
    public function store(Request $request): RedirectResponse
    {
        $data=$request->validate(['title'=>['required','string','max:255'],'course_type_id'=>['required','exists:course_types,id'],'city_id'=>['required','exists:cities,id'],'branch_id'=>['required','exists:branches,id'],'fee'=>['required','numeric','min:0'],'duration'=>['nullable','string','max:100'],'description'=>['nullable','string'],'image'=>['nullable','image','max:2048']]);
        $branch=Branch::whereKey($data['branch_id'])->where('city_id',$data['city_id'])->exists(); if(!$branch)return back()->withErrors(['branch_id'=>'Selected branch does not belong to this city.'])->withInput();
        $data['slug']=$this->uniqueSlug($data['title']); $data['is_active']=$request->boolean('is_active'); if($request->hasFile('image'))$data['image']=$request->file('image')->store('courses','public'); Course::create($data);
        return redirect()->route('admin.courses.index')->with('status','Course added successfully.');
    }

    public function edit(Course $course): View
    {
        return view('admin.courses.edit', $this->formOptions()+['course'=>$course]);
    }

    public function update(Request $request, Course $course): RedirectResponse
    {
        $data=$this->validated($request);
        if(!Branch::whereKey($data['branch_id'])->where('city_id',$data['city_id'])->exists()) return back()->withErrors(['branch_id'=>'Selected branch does not belong to this city.'])->withInput();
        if($course->title!==$data['title']) $data['slug']=$this->uniqueSlug($data['title'],$course);
        $data['is_active']=$request->boolean('is_active');
        if($request->hasFile('image')) { if($course->image) Storage::disk('public')->delete($course->image); $data['image']=$request->file('image')->store('courses','public'); }
        $course->update($data);
        return redirect()->route('admin.courses.index')->with('status','Course updated successfully.');
    }

    public function destroy(Course $course): RedirectResponse
    {
        if($course->image) Storage::disk('public')->delete($course->image);
        $course->delete();
        return back()->with('status','Course deleted successfully.');
    }

    private function formOptions(): array
    {
        return ['types'=>CourseType::where('is_active',true)->orderBy('name')->get(),'cities'=>City::where('is_active',true)->orderBy('name')->get(),'branches'=>Branch::where('is_active',true)->with('city')->orderBy('name')->get()];
    }

    private function validated(Request $request): array
    {
        return $request->validate(['title'=>['required','string','max:255'],'course_type_id'=>['required','exists:course_types,id'],'city_id'=>['required','exists:cities,id'],'branch_id'=>['required','exists:branches,id'],'fee'=>['required','numeric','min:0'],'duration'=>['nullable','string','max:100'],'description'=>['nullable','string'],'image'=>['nullable','image','max:2048']]);
    }

    private function uniqueSlug(string $title, ?Course $ignore = null): string
    {
        $base=Str::slug($title) ?: 'course'; $slug=$base; $suffix=2;
        while(Course::where('slug',$slug)->when($ignore,fn($query)=>$query->whereKeyNot($ignore->id))->exists()) $slug=$base.'-'.$suffix++;
        return $slug;
    }
}
