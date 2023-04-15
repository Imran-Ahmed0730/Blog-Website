<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function addBlog(){
        return view('admin.blog.add-blog');
    }
    public function newBlog(Request $request){
        Blog::saveBlog($request);
        return back()->with('message', 'Blog Added Successfully!!');
    }

    public function manageBlog(){
        return view('admin.blog.manage-blog', [
            'categories'=>Blog::all()
        ]);
    }

    public function editBlog($id){
        return view('admin.blog.edit-blog', [
            'Blog'=>Blog::find($id)
        ]);
    }

    public function updateBlog(Request $request){
        Blog::updateBlog($request);
        return back()->with('message', 'Info Updated');
    }

    public function statusBlog($id){
        Blog::statusBlog($id);
        return back()->with('message', 'Status Changed!!');
    }

    public function deleteBlog(Request $request){
        Blog::deleteBlog($request->id);
        return back()->with('message', 'Blog deleted!!');
    }
}
