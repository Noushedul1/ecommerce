<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Front\Order;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $categoryCount = Category::count();
        $subcategoryCount = Subcategory::count();
        $brandCount = Brand::count();
        $productCount = Product::count();
        $orderCount = Order::count();
        $unitCount = Unit::count();
        $orders = Order::with('orderitem')->get();
        return view('dashboard',compact('categoryCount','subcategoryCount','brandCount','productCount','orderCount','unitCount','orders'));
    }
}
