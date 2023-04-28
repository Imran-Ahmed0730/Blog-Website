<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    private static $author, $image, $imageNewName, $directory, $imageUrl;
    public static function saveAuthor($request){
        if (Author::find($request->id))
        {
            self::$author = Author::find($request->id);
            if ($request->file('image')){
                if (self::$author->image){
                    if (file_exists(self::$author->image)){
                        unlink(self::$author->image);
                        self::$author->image = self::saveImage($request);
                    }
                }
                else{
                    self::$author->image = self::saveImage($request);
                }
            }
        }
        else
        {
            self::$author = new Author();
            self::$author->image = self::saveImage($request);
        }

        self::$author->name = $request->name;
        self::$author->email = $request->email;
        self::$author->description = $request->description;
        self::$author->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = $request->name. '-' .rand().'.'.self::$image->Extension();
        self::$directory = 'admin-asset/upload-images/author/';
        self::$imageUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;
    }
    public static function statusAuthor($id){
        self::$author = Author::find($id);
        if (self::$author->status == 1){
            self::$author->status =0;
        }
        else{
            self::$author->status = 1;
        }
        self::$author->save();

    }

    public static function deleteAuthor($id){
        self::$author = Author::find($id);
        if (self::$author->image){
            if (file_exists(self::$author->image)){
                unlink(self::$author->image);
            }
        }
        self::$author->delete();
    }
}
