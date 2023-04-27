<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Blog extends Model
{
    private static $blog, $image, $imageNewName, $directory, $imageUrl, $str;
    use HasFactory;
    public static function saveBlog($request){
        if(Blog::find($request->id)){
            self::$blog = Blog::find($request->id);
        }
        else{
            self::$blog = new Blog();
        }

        self::$blog->author_id = $request->author_id;
        self::$blog->category_id = $request->category_id;
        self::$blog->blog_title = $request->blog_title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->description = $request->description;
        self::$blog->date = $request->date;
        self::$blog->image = self::saveImage($request);
        self::$blog->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = $request->blog_title. $request->id. '.'. self::$image->Extension();
        self::$directory = 'admin-asset/upload-images/blogs/';
        self::$imageUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imageUrl;
    }

    private static function makeSlug($request){
        if ($request->slug){
            self::$str = $request->slug;
        }
        else{
            self::$str = $request->blog_title;
        }
        return preg_replace('/\s+/u','-',trim(self::$str));
    }

    public static function updateBlog($request){
        self::$blog = Blog::find($request->id);
        self::$blog->blog_title = $request->blog_title;
        self::$blog->slug = self::makeSlug($request);
        self::$blog->description = $request->description;
        self::$blog->date = $request->date;
        if ($request->file('image')){
            if (self::$blog->image){
                if (file_exists(self::$blog->image)){
                    unlink(self::$blog->image);
                    self::$blog->image = self::saveImage($request);
                }
            }
            else{
                self::$blog->image = self::saveImage($request);
            }
        }
        self::$blog->save();
    }


    public static function statusBlog($id){
        self::$blog = Blog::find($id);
        if (self::$blog->status == 1){
            self::$blog->status = 0;
        }
        else
            self::$blog->status = 1;
        self::$blog->save();
    }
    public static function deleteBlog($request){
        self::$blog = Blog::find($request->id);
        self::$blog->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }

}
