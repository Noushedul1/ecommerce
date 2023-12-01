<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(5);
        return view('brand.brand',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:brands,name',
        ]);
        $brand = new Brand();
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageNameTosave = rand().".".$extension;
            Image::make($image)->resize(300,300)->save($image->move('admin/images/brand_images/',$imageNameTosave));
            $brand->image = $imageNameTosave;
        }
        //Brand::create([
        //     'name'=>$request->name,
        //     'brand_slug'=>Str::slug($request->name),
        //     'description'=>$request->description,
        //     'status'=>$request->status
        // ]);
        $brand->name = $request->name;
        $brand->brand_slug = Str::slug($request->name);
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->save();
        $notification = array('alert-type'=>'success','message'=>'Brand Created Successfully');
        return redirect()->route('admin.brand.index')->with($notification);
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
    public function edit(Brand $brand)
    {
        return view('brand.edit_brand',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Brand $brand)
    {
        $request->validate([
            'name'=>'required|unique:brands,name'
        ]);
        if($request->hasFile('image')){
            if(File::exists('admin/images/brand_images/'.$brand->image)){
                File::delete('admin/images/brand_images/'.$brand->image);
            }
        }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageNameTosave = rand().".".$extension;
            Image::make($image)->resize(300,300)->save($image->move('admin/images/brand_images/',$imageNameTosave));
            $brand->image = $imageNameTosave;
        }
        $brand->name = $request->name;
        $brand->brand_slug = Str::slug($request->name);
        $brand->description = $request->description;
        $brand->status = $request->status;
        $brand->save();
        $notification = array('alert-type'=>'success','message'=>'Brand Updated');
        return redirect()->route('admin.brand.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if(File::exists('admin/images/brand_images/'.$brand->image)){
            File::delete('admin/images/brand_images/'.$brand->image);
        }
        $brand->delete();
        $notification = array('alert-type'=>'error','message'=>'Brand Deleted');
        return redirect()->route('admin.brand.index')->with($notification);
    }
}
