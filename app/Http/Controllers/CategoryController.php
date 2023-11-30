<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(5);
        return view('category.category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories,name',
        ]);
        Category::create([
            'name'=>$request->name,
            'category_slug'=>Str::slug($request->name),
            'description'=>$request->description,
            'status'=>$request->status
        ]);
        $notification = array('alert-type'=>'error','message'=>'Category Created Successfully');
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit-category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Category $category)
    {
        $request->validate([
            'name'=>'required|unique:categories,name',
        ]);
        $category->update([
            'name'=>$request->name,
            'category_slug'=>Str::slug($request->name),
            'description'=>$request->description,
            'status'=>$request->status
        ]);
        $notification = array('alert-type'=>'success','message'=>'Category Updated');
        return redirect()->route('admin.category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        $notification = array('alert-type'=>'error','message'=>'Category Deleted');
        return redirect()->route('admin.category.index')->with($notification);
    }
}
