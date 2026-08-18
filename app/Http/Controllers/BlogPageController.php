<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;
class BlogPageController extends Controller {
 public function index(Request $request):View{$search=$request->string('search')->trim();$blogs=Blog::where('status','published')->with('category')->when($search->isNotEmpty(),fn($q)=>$q->where(fn($query)=>$query->where('title','like','%'.$search.'%')->orWhere('description','like','%'.$search.'%')))->latest('published_at')->paginate(10)->withQueryString();$recent=Blog::where('status','published')->latest('published_at')->limit(5)->get();return view('pages.blogs',compact('blogs','recent'));}
 public function show(Blog $blog):View{abort_unless($blog->status==='published',404);return view('pages.blog-details',compact('blog'));}
}
