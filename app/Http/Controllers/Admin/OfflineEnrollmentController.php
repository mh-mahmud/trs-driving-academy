<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;use App\Models\OfflineEnrollment;use Illuminate\Http\{RedirectResponse,Request};use Illuminate\Support\Facades\Storage;use Illuminate\View\View;
class OfflineEnrollmentController extends Controller{
 public function index(Request $r):View{$items=OfflineEnrollment::with(['course','branch'])->when($r->status,fn($q,$v)=>$q->where('status',$v))->when($r->search,fn($q,$v)=>$q->where(fn($sub)=>$sub->where('name','like','%'.$v.'%')->orWhere('mobile','like','%'.$v.'%')->orWhere('email','like','%'.$v.'%')))->latest()->paginate(20)->withQueryString();return view('admin.enrollments.index',['enrollments'=>$items]);}
 public function show(OfflineEnrollment $enrollment):View{return view('admin.enrollments.show',['enrollment'=>$enrollment->load(['course','branch'])]);}
 public function status(Request $r,OfflineEnrollment $enrollment):RedirectResponse{$data=$r->validate(['status'=>'required|in:pending,approved,rejected,completed']);$enrollment->update($data);return back()->with('status','Enrollment status updated.');}
 public function destroy(OfflineEnrollment $enrollment):RedirectResponse{foreach(['document_path','photo'] as $field)if($enrollment->{$field})Storage::disk('public')->delete($enrollment->{$field});$enrollment->delete();return redirect()->route('admin.enrollments.index')->with('status','Enrollment deleted.');}
}
