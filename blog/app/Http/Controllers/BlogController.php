<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Blog;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('front-end.home.home', [
            'blogs'=>Blog::where('status', 1)->get()
        ]);
    }
    public function addBlog(){
        return view('admin.blog.add-blog',[
            'authors'=>Author::where('status', 1)->get(),
            'categories'=>Category::where('status', 1)->orderby('id','asc')->get()
        ]);
    }
    public function newBlog(Request $request){
//        return $request;
        Blog::saveBlog($request);
        return back()->with('message', 'Blog Added Successfully!!');
    }

    public function manageBlog(){
//        return Blog::with('category', 'author')->get();
        return view('admin.blog.manage-blog', [
            'blogs'=>Blog::with('category', 'author')->get()
        ]);
    }

    public function editBlog($id){
        return view('admin.blog.edit-blog', [
            'blog'=>Blog::find($id),
        ]);
    }

    public function updateBlog(Request $request){
        Blog::updateBlog($request);
        return back()->with('message', 'Blog Updated');
    }

    public function statusBlog($id){
        Blog::statusBlog($id);
        return back()->with('message', 'Status Changed!!');
    }

    public function deleteBlog(Request $request){
//        return $request;
        Blog::deleteBlog($request);
        return back()->with('message', 'Blog deleted!!');
    }
}
