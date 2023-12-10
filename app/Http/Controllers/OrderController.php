<?php

namespace App\Http\Controllers;

use App\Models\Front\Order;
use Illuminate\Http\Request;
use App\Models\Front\Orderitem;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index() {
        // $item_amount = Orderitem::select('quantity','price')->get(); //for practice
        // $item_amount_to_array =  var_dump((array) $item_amount); //for practice
        // $array = json_decode(json_encode($item_amount), true); //for practice
        $orders = Order::with('orderitem')->get();
        return view('order.order',compact('orders'));
    }
    public function downloadPdf() {
        $orders = Order::with('orderitem')->get();
        $data['orders'] = $orders;
        $pdf = Pdf::loadView('pdf.order', $data);
        return $pdf->download('order.pdf');
    }
    public function orderStatus($id) {
        $order = Order::where('status',$id)->first();
        if($order->status == 0) {
            $order->status = 1;
        }else{
            $order->status = 0;
        }
        $order->save();
        return redirect()->back();
    }
}
