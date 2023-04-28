<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Comment extends Model
{
    use HasFactory;
    private static $comment;
    public static function saveComment($request){
//        $request->validate([
//            'comment' => 'required|min:10|max:200'
//        ]);
        self::$comment = new Comment();
        self::$comment->user_id = Session::get('customerId');
        self::$comment->blog_id = $request->blog_id;
        self::$comment->comment = $request->comment;
        self::$comment->save();
    }

    public static function statusComment($id){
        self::$comment = Comment::find($id);
        if (self::$comment->status == 1){
            self::$comment->status = 0;
        }
        else
            self::$comment->status = 1;
        self::$comment->save();
    }
    public static function deleteComment($request){
        self::$comment = comment::find($request->id);
        self::$comment->delete();
    }

    public function user(){
        return $this->belongsTo(Customer::class);
    }

    public function blog(){
        return $this->belongsTo(Blog::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }


}
