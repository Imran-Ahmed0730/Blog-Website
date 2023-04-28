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

    public function user(){
        return $this->belongsTo(Customer::class);
    }


}
