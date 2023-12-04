<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index(){
        return view('front.dashboard');
    }
    public function productDetails() {
        return view('front.product_details.product_details');
    }
    public function categoryPage($id) {
        $products = Product::where('category_id',$id)->where('status',1)->get();
        $category = Category::find($id);
        return view('front.category_page.category_page',compact('products','category'));
    }
    public function subcategoryPage($id) {
        $products = Product::where('subcategory_id',$id)->where('status',1)->get();
        $subcategory = Subcategory::find($id);
        return view('front.subcategory_page.subcategory_page',compact('products','subcategory'));
    }
    public function contactUs(){
        return view('front.contact_us.contact_us');
    }
}
