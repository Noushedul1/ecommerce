<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function addToCart(Request $request) {
        // return $request->all();
        // validation.required proble solution
        // ans vendor/darryldecode/cart/src/Darryldecode/Cart/Cart.php:709
        $product = Product::find($request->product_id);
        // return $product->id;
        \Cart::add([
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->selling_price,
            'quantity' => $request->qty,
            'attributes' => [
                'image'=> $product->image
            ]
        ]);
        // return Cart::getContent(); // practice
        // return redirect()->back();
        if(!$request->ajax()) {
            return redirect()->back();
        }
        else{
            return json_encode('cart added successfully');
        }
    }
    public function cartView() {
        $carts =  Cart::getContent();
        return view('front.cart.cart_view',compact('carts'));
    }
    public function removeProductCart($id) {
        Cart::remove($id);
        return redirect()->back();
    }
}
