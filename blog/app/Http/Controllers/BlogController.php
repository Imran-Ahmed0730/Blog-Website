<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Blog;
use App\Models\Comment;
use Session;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
//        return Blog::with('category')->where('status', 1)->orderby('date', 'desc')->get();
        return view('front-end.home.home', [
            'blogs'=>Blog::with('category')->where('status', 1)->orderby('date', 'desc')->get(),
            'categories'=>Category::where('status', 1)->get(),
            'authors' => Author::where('status', 1)->get()
        ]);
    }

    public function allBlogs(){
        return view('front-end.blog.all-blogs',[
            'blogs'=>Blog::where('status', 1)->orderby('date', 'desc')->get(),
            'categories'=>Category::where('status', 1)->get(),
            'authors' => Author::where('status', 1)->get()
        ]);
    }

    public function aboutAuthor($id){
        $author = Author::find($id);
        return view('front-end.author.author', [
            'blogs'=>Blog::with('category')->where('author_id', $author->id)->get(),
            'categories'=>Category::where('status', 1)->get(),
            'authors' => Author::where('status', 1)->get(),
            'directed_author'=>Author::find($id)
        ]);
    }

    public function aboutCategory($id){
//        return Blog::where('category_id', $id)->get();
        return view('front-end.category.category',[
            'blogs'=>Blog::where('category_id', $id)->get(),
            'categories'=>Category::where('status', 1)->get(),
            'category'=> Category::where('id', $id)->first(),
            'authors' => Author::where('status', 1)->get(),
        ]);
    }

    public function about(){
        return view('front-end.about.about',[
            'categories'=>Category::where('status', 1)->get(),
            'authors' => Author::where('status', 1)->get(),
        ]);
    }
    public function contact(){
        return view('front-end.contact.contact',[
            'categories'=>Category::where('status', 1)->get(),
            'authors' => Author::where('status', 1)->get(),
        ]);
    }
    public function blogDetails($slug){
        $blog = Blog::where('slug', $slug)->first();
        $comment = Comment::where('blog_id', $blog->id)->get();

        return view('front-end.blog.blog-details', [
            'blog'=>$blog,
            'categories'=>Category::where('status', 1)->get(),
            'authors' => Author::where('status', 1)->get(),
            'comments'=>Comment::with('user')->where('blog_id', $blog->id)->get(),
            'count'=>count($comment)
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
        Blog::deleteBlog($request);
        return back()->with('message', 'Blog deleted!!');
    }
}
