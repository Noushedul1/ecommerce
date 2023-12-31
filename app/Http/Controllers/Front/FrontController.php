<?php

namespace App\Http\Controllers\Front;

use Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Front\Orderitem;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index(){
        $carts = Cart::getContent();
        $products = Product::where('status',1)->get();
        $hotProducts = Product::orderBy('hit_count','DESC')->where('hit_count','>','0')->where('status',1)->get();
        $highHitCountProduct = Product::orderBy('hit_count','DESC')->where('status',1)->first();
        $bestSellingProducts = Product::orderBy('sells_count','DESC')->where('sells_count','>','0')->where('status',1)->get();
        $furnitures = Product::where('category_id',4)->where('status',1)->get();
        $highpriceProduct = Product::orderBy('selling_price','DESC')->where('status',1)->first();
        $lowpriceProduct = Product::orderBy('selling_price','ASC')->where('status',1)->first();
        // return $lowpriceProduct;
        // return $furnitures;
        // $bsells = DB::table('products')
        // ->join('orderitems','products.id','=','orderitems.product_id')
        // ->selectRaw('product.id','orderitems.quantity as total')
        // ->groupBy('product_id')
        // ->orderBy('total','DESC')
        // ->get();
        // $bestSells = [];
        // foreach($bsells as $s) {
        //     $p = Product::findOrFail($s->product_id);
        //     $bestSells[] = $p;
        // }
        // return $bestSells;
        return view('front.dashboard',compact('products','hotProducts','bestSellingProducts','carts','highpriceProduct','lowpriceProduct','furnitures','highHitCountProduct'));
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
