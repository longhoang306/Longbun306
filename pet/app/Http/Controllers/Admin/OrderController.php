<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\Category;
use App\Image;
use Illuminate\Support\Facades\Storage;
use App\CategoryProduct;

class OrderController extends Controller
{
    //
    function index(){
        $data = Order::paginate(15); //phan trang
        //return view('admin.orders.index',$data);
        return view('admin.orders.index',['data'=>$data]);
    }

    function edit (Request $request)
    {
        $id = $request->id;

        if ($request->isMethod('POST')) {
            //cập nhật bản ghi
            $order = order::find($id);
            $order->quantity = $request->quantity;
            $order->user_id = $request->user_id;
            $order->address = $request->address;
            $order->phone = $request->phone;
            $order->receiver_name = $request->receiver_name;
            $order->total_price = $request->total_price;
            $order->status = $request->status;
            $order->note = $request->note;
            $order->payment_method = $request->payment_method;
            $order->save();
        }

        if (is_numeric($id)) {
            $order = order::find($id);
        }

        $product = Product::where('id', '!=', $id)->get();
        return view('admin.orders.edit', ['product' => $product, 'order' => $order]);
    }
}
