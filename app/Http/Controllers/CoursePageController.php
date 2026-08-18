<?php
namespace App\Http\Controllers;
use App\Models\Branch;
use App\Models\City;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\View\View;
class CoursePageController extends Controller {
 public function __invoke(Request $request):View {
  $filters=$request->validate(['course_type_id'=>['nullable','integer','exists:course_types,id'],'city_id'=>['nullable','integer','exists:cities,id'],'branch_id'=>['nullable','integer','exists:branches,id']]);
  $courses=Course::query()->where('is_active',true)->with(['type','city','branch'])->when($filters['course_type_id']??null,fn($q,$id)=>$q->where('course_type_id',$id))->when($filters['city_id']??null,fn($q,$id)=>$q->where('city_id',$id))->when($filters['branch_id']??null,fn($q,$id)=>$q->where('branch_id',$id))->latest()->paginate(9)->withQueryString();
 return view('pages.courses',compact('courses')+['courseTypes'=>CourseType::where('is_active',true)->orderBy('name')->get(),'cities'=>City::where('is_active',true)->orderBy('name')->get(),'branches'=>Branch::where('is_active',true)->when($filters['city_id']??null,fn($q,$id)=>$q->where('city_id',$id))->orderBy('name')->get(),'faqs'=>Faq::where('is_active',true)->orderBy('sort_order')->get()]);
 }
 public function show(Course $course):View {
  abort_unless($course->is_active,404);$course->load(['type','city','branch.city']);
  $relatedCourses=Course::where('is_active',true)->whereKeyNot($course->id)->with(['type','branch'])->latest()->limit(3)->get();
  return view('pages.course-details',['course'=>$course,'relatedCourses'=>$relatedCourses,'faqs'=>Faq::where('is_active',true)->orderBy('sort_order')->get()]);
 }
}
