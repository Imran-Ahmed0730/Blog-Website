<?php

namespace App\Http\Controllers;

use App\Models\author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('admin.author.add-author');
    }
    public function newAuthor(Request $request){
        Author::saveAuthor($request);
        return back()->with('message', 'Author Added Successfully!!');
    }

    public function manageAuthor(){
        return view('admin.author.manage-author', [
            'authors'=>Author::all()
        ]);
    }

    public function editAuthor($id){
        return view('admin.author.edit-author', [
            'author'=>Author::find($id)
        ]);
    }

    public function updateAuthor(Request $request){
        Author::saveAuthor($request);
        return back()->with('message', 'Info Updated');
    }

    public function statusAuthor($id){
        Author::statusAuthor($id);
        return back()->with('message', 'Status Changed!!');
    }

    public function deleteAuthor(Request $request){
        Author::deleteAuthor($request->id);
        return back()->with('message', 'Author deleted!!');
    }
}
