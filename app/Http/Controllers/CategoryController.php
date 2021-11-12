<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category=Category::all();
        return view('Admin_Dashboard.Category.managCategory',compact('category'));
    }
    public function add()
    {
        return view('Admin_Dashboard.Category.add_category');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'category_name' => 'required|unique:posts|max:255',
            'order_number' => 'required',
            'added_on'=>'required',
            'category_state'=>'required'
        ]);
        $category =new Category();
        $category->category_name=$request->category_name;
        $category->order_number=$request->order_number;
        $category->added_on=$request->added_on;
        $category->category_state=$request->category_state;
        $category->user_id=auth()->user()->id;
        $category->save();
        return redirect()->route('category.add')->with('add_success','new category is create success');

    }
    public function active($category_id){
        $category=Category::find($category_id);
        $category->category_state= 0;
        $category->update();
        return back();
    }
    public function deactivate($category_id){
        $category=Category::find($category_id);
        $category->category_state= 1;
        $category->update();
        return back();
    }
    public function delete($category_id){
        $category=Category::find($category_id);
        $category->delete();
        return redirect()->route('category.index')->with('del',$category->category_name.' category is deleted');

    }
    public function edit(Request $request ,$category_id){
        $validated = $request->validate([
            'category_name' => 'required|max:255',
            'order_number' => 'required',
           
        ]);
        $category=Category::find($category_id);
        $category->category_name=$request->category_name;
        $category->order_number=$request->order_number;
        $category->update();
        return redirect()->route('category.index')->with('update',$category->category_name." category is updated");
    }
}
