<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {
        $subcategories = Subcategory::paginate(5);
        return view('subcategory.subcategory',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('name','id')->get();
        return view('subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:subcategories,name',
        ]);
        Subcategory::create([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'subcategory_slug'=>Str::slug($request->name),
            'description'=>$request->description,
            'status'=>$request->status
        ]);
        $notification = array('alert-type'=>'success','message'=>'Sub Category Created Successfully');
        return redirect()->route('admin.subcategory.index')->with($notification);
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
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('subcategory.edit_subcategory',compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Subcategory $subcategory)
    {
        $request->validate([
            'name'=>'required|unique:subcategories,name',
        ]);
        $subcategory->update([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'subcategory_slug'=>Str::slug($request->name),
            'description'=>$request->description,
            'status'=>$request->status
        ]);
        $notification = array('alert-type'=>'success','message'=>'Sub Category Updated');
        return redirect()->route('admin.subcategory.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        $notification = array('alert-type'=>'error','message'=>'Sub Category Deleted');
        return redirect()->route('admin.subcategory.index')->with($notification);
    }
}
