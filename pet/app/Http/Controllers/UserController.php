<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Category;
use App\Image;
use Illuminate\Support\Facades\Storage;
use App\CategoryProduct;


class UserController extends Controller
{
    //
    function order(){
        $data = Order::where('user_id',Auth::user()->id)->paginate(10); //phan trang
        //return view('admin.orders.index',$data);
        //  dd($data);
        return view('frontends.user.order',['data'=>$data]);

    }
    function profile (Request $request)
    {
        $user = Auth::user();
        if ($request->isMethod('post')) {
            //cap nhat profile
            $user->fullname = $request->fullname;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
        }
        return view('auth.profile', ['user' => $user]);
    }

    function orderdetail ($id)
    {

        $order= Order::where('id',$id)->first();
        return view('frontends.user.orderdetail',['order' => $order ]);
        //dd($data);
    }
}