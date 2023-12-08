<?php

namespace App\Http\Controllers\Front;

use Cart;
use App\Models\Product;
use App\Models\Front\Order;
use Illuminate\Http\Request;
use App\Models\Front\Orderitem;
use App\Http\Controllers\Controller;
use App\Events\CustomermailProcessed;

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
        $notification = array('message'=>'Successfully cart Add','alert-type'=>'success');
        return redirect()->back()->with($notification);
        // return json_encode('cart added successfully');
    }
    public function cartView() {
        $carts =  Cart::getContent();
        return view('front.cart.cart_view',compact('carts'));
    }
    public function cartIncrement($id) {
        Cart::update($id,[
            'quantity'=>1
        ]);
        return redirect()->back();
    }
    public function cartDecrement($id) {
        Cart::update($id,[
            'quantity'=>-1
        ]);
        return redirect()->back();
    }
    public function checkoutIndex(){
        $carts = Cart::getContent();
        return view('front.checkout.checkout',compact('carts'));
    }
    public function checkout(Request $request) {
        // return $request->all();
        $order = new Order();
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->email = $request->email;
        $order->mobile = $request->mobile;
        $order->city = $request->city;
        $order->status = "Pending";
        $order->address = $request->address;
        $order->payment_method = $request->payment_method;
        $order->delivery_method = $request->delivery_method;
        $order->save();
        $carts = Cart::getContent();
        foreach($carts as $cart) {
            $orderItem = new Orderitem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $cart->id;
            $orderItem->product_name = $cart->name;
            $orderItem->price = $cart->price;
            $orderItem->quantity = $cart->quantity;
            $orderItem->save();
            Cart::clear();
        }
        $customerMsg = ['cart_submit'=>'Your order submited'];
        event(new CustomermailProcessed($customerMsg));
        return redirect()->back();
    }
    public function removeProductCart($id) {
        Cart::remove($id);
        $notification = array('message'=>'Successfully cart Deleted','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
}
