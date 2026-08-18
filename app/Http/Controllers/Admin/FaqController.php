<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
class FaqController extends Controller {
 public function index():View{return view('admin.faqs.index',['faqs'=>Faq::orderBy('sort_order')->paginate(20)]);}
 public function store(Request $r):RedirectResponse{$data=$this->validated($r);$data['is_active']=$r->boolean('is_active');Faq::create($data);return back()->with('status','FAQ added successfully.');}
 public function update(Request $r,Faq $faq):RedirectResponse{$data=$this->validated($r);$data['is_active']=$r->boolean('is_active');$faq->update($data);return back()->with('status','FAQ updated successfully.');}
 public function destroy(Faq $faq):RedirectResponse{$faq->delete();return back()->with('status','FAQ deleted successfully.');}
 private function validated(Request $r):array{return $r->validate(['question'=>['required','string','max:500'],'answer'=>['required','string','max:5000'],'sort_order'=>['nullable','integer','min:0']]);}
}
