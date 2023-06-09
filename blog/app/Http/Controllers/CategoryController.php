<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }
    public function newCategory(Request $request){
        Category::saveCategory($request);
        return back()->with('message', 'Category Added Successfully!!');
    }

    public function manageCategory(){
        return view('admin.category.manage-category', [
            'categories'=>Category::all()
        ]);
    }

    public function editCategory($id){
        return view('admin.category.edit-category', [
            'category'=>Category::find($id)
        ]);
    }

    public function updateCategory(Request $request){
        Category::saveCategory($request);
        return back()->with('message', 'Info Updated');
    }

    public function statusCategory($id){
        Category::statusCategory($id);
        return back()->with('message', 'Status Changed!!');
    }

    public function deleteCategory(Request $request){
        Category::deleteCategory($request->id);
        return back()->with('message', 'Category deleted!!');
    }
}
