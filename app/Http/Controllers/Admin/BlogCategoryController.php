<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
class BlogCategoryController extends Controller {
 public function index():View{return view('admin.blogs.categories',['categories'=>BlogCategory::latest()->paginate(15)]);}
 public function store(Request $r):RedirectResponse{$data=$r->validate(['name'=>['required','string','max:255','unique:blog_categories,name']]);$data['slug']=$this->slug($data['name']);$data['is_active']=$r->boolean('is_active');BlogCategory::create($data);return back()->with('status','Category added successfully.');}
 public function update(Request $r,BlogCategory $category):RedirectResponse{$data=$r->validate(['name'=>['required','string','max:255',Rule::unique('blog_categories','name')->ignore($category->id)]]);if($category->name!==$data['name'])$data['slug']=$this->slug($data['name'],$category);$data['is_active']=$r->boolean('is_active');$category->update($data);return back()->with('status','Category updated successfully.');}
 public function destroy(BlogCategory $category):RedirectResponse{try{$category->delete();}catch(\Throwable){return back()->withErrors(['delete'=>'Category is used by a blog and cannot be deleted.']);}return back()->with('status','Category deleted successfully.');}
 private function slug(string $name,?BlogCategory $ignore=null):string{$base=Str::slug($name)?:'category';$slug=$base;$i=2;while(BlogCategory::where('slug',$slug)->when($ignore,fn($q)=>$q->whereKeyNot($ignore->id))->exists())$slug=$base.'-'.$i++;return $slug;}
}
