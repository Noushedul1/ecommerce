<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        return view('product.create',
            compact('categories','subcategories','brands','units')
        );
    }
    public function get_category_id($id) {
        $subcategories = Subcategory::where('category_id',$id)->get();
        return response()->json([
            'subcategories'=>$subcategories
        ]);
    }
}
