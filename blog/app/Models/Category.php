<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    private static $category, $image, $imageNewName, $directory, $imageUrl;
    public static function saveCategory($request){
        if (Category::find($request->id))
        {
            self::$category= Category::find($request->id);
            if ($request->file('image')){
                if (self::$category->image){
                    if (file_exists(self::$category->image)){
                        unlink(self::$category->image);
                        self::$category->image = self::saveImage($request);
                    }
                }
                else{
                    self::$category->image = self::saveImage($request);
                }
            }
        }
        else
        {
            self::$category = new Category();
            self::$category->image = self::saveImage($request);
        }

        self::$category->category_name = $request->category_name;
        self::$category->description = $request->description;
        self::$category->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = $request->category_name. rand().'.'.self::$image->Extension();
        self::$directory = 'admin-asset/upload-images/category/';
        self::$imageUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;
    }
    public static function statusCategory($id){
        self::$category = Category::find($id);
        if (self::$category->status == 1){
            self::$category->status =0;
        }
        else{
            self::$category->status = 1;
        }
        self::$category->save();

    }

    public static function deleteCategory($id){
        self::$category = Category::find($id);
        if (self::$category->image){
            if (file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
        }
        self::$category->delete();
    }
}
