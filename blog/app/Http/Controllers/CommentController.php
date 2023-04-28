<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function saveComment(Request $request){
        Comment::saveComment($request);
        return back()->with('message', 'Comment Saved');
    }
    public function manageComment(){
//        return Comment::with('blog', 'author', 'user')->get();
        return view('admin.comment.manage-comment', [
            'blogComment'=>Comment::with('blog', 'author', 'user')->get()
        ]);
    }

    public function statusComment($id){
        Comment::statusComment($id);
        return back()->with('message', 'Status Changed!!');
    }

    public function deleteComment(Request $request){
        Comment::deleteComment($request);
        return back()->with('message', 'Comment deleted!!');
    }
}
