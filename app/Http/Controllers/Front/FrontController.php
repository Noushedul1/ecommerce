<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.dashboard');
    }
    public function productDetails() {
        return view('front.product_details.product_details');
    }
    public function categoryPage() {
        return view('front.category_page.category_page');
    }
    public function contactUs(){
        return view('front.contact_us.contact_us');
    }
}
