<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;

class FrontController extends Controller
{
    public function index(){
        $carts = Cart::getContent();
        $products = Product::where('status',1)->get();
        $hotProducts = Product::orderBy('hit_count','DESC')->where('hit_count','>','5')->where('status',1)->get();
        $bestSellingProducts = Product::orderBy('sells_count','DESC')->where('sells_count','>','0')->where('status',1)->get();
        return view('front.dashboard',compact('products','hotProducts','bestSellingProducts','carts'));
    }
    public function productDetails($id) {
        $carts = Cart::getContent();
        $product = Product::find($id);
        $reladedProducts = Product::where('category_id',$product->category_id)->take(4)->get();
        return view('front.product_details.product_details',compact('product','reladedProducts','carts'));
    }
    public function categoryPage($id) {
        $carts = Cart::getContent();
        $products = Product::where('category_id',$id)->where('status',1)->get();
        $category = Category::find($id);
        return view('front.category_page.category_page',compact('products','category','carts'));
    }
    public function subcategoryPage($id) {
        $carts = Cart::getContent();
        $products = Product::where('subcategory_id',$id)->where('status',1)->get();
        $subcategory = Subcategory::find($id);
        return view('front.subcategory_page.subcategory_page',compact('products','subcategory','carts'));
    }
    public function getProductInfo() {
        // return json_decode($_GET['id']);
        $product = Product::find($_GET['id']);
        $product->hit_count = $product->hit_count + 1;
        $product->save();
        return json_decode($product); //direct
        // return response()->json([
        //     'product'=>$product
        // ]);
    }
    public function contactUs(){
        return view('front.contact_us.contact_us');
    }
}
