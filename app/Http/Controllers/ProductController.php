<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subimage;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with(['category','subcategory','brand','unit'])->get();
        return view('product.product',compact('products'));
    }
    public function get_category_id($id) {
        $subcategories = Subcategory::where('category_id',$id)->get();
        return response()->json([
            'subcategories'=>$subcategories
        ]);
    }
    public function create() {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        return view('product.create',
            compact('categories','subcategories','brands','units')
        );
    }
    public function store(Request $request) {
        // return $request->all();
        $product = new Product();
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $fileNameTosave = rand().".".$extension;
            Image::make($image)->resize(300,300)->save($image->move('admin/images/product_images/',$fileNameTosave));
            $product->image = $fileNameTosave;
        }
        $product->name = $request->name;
        $product->product_slug = Str::slug($request->name);
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->regular_price = $request->regular_price;
        $product->selling_price = $request->selling_price;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->status = $request->status;
        $product->save();
        if($request->hasFile('images')) {
            $files = $request->file('images');
            foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $fileNameTosave = rand().".".$extension;
                Image::make($file)->resize(300,300)->save($file->move('admin/images/producsMore_images/',$fileNameTosave));
                $subimage = new Subimage();
                $subimage->images = $fileNameTosave;
                $subimage->product_id = $product->id;
                $subimage->save();
            }
        }
        $notification = array('alert_type'=>'success','message'=>'Product Successfully saved');
        return redirect()->route('admin.product.index')->with($notification);
    }

    public function show(Product $product) {
        return view('product.show',compact('product'));
    }
    public function edit(Product $product) {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        return view('product.edit_product',
        compact('product','categories','subcategories','brands','units'));
    }
}
