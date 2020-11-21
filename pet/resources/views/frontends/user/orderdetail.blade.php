@extends('layouts.frontend')
@section('content')
    <div class="card card-primary">
        <div class="card-header" style="text-align: center;">
            <h3 class="card-title">Orderdetail</h3>
        </div>
        <div class="card-body" style="border: #f30505c7 solid 2px">
            <div class="banner" style="color: blueviolet">
                <label for="">id:</label>
                <span>{{$order->id}}</span>
                <br>
                <label for="">Quantity:</label>
                <span>{{$order->quantity}}</span>
                <br>
                <label for="">User_id:</label>
                <span>{{$order->user->name}}</span>
                <br>
                <label for="">Address</label>
                <span>{{$order->address}}</span>
                <br>
                <label for="">Phone:</label>
                <span>{{$order->phone}}</span>
                <br>
                <label for="">Total_price:</label>
                <span>{{$order->total_price}}</span>
                <br>
                <label for="">Status:</label>
                <span>
                    @if($order->status==0)
                        <a class="badge badge-primary" style="background: deeppink">pendding></a>
                    @endif

                    @if($order->status==1)
                        <a class="badge badge-primary" style="background: deeppink">Đã giao></a>
                    @endif

                    @if($order->status==2)
                        <a class="badge badge-primary" style="background: deeppink">Đang giao></a>
                    @endif

                    @if($order->status==3)
                        <a class="badge badge-primary" style="background: deeppink">Đã nhận></a>
                    @endif

                    @if($order->status==4)
                        <a class="badge badge-primary" style="background: deeppink">Đã hủy></a>
                    @endif
                </span>
                <br>
                <label for="">Payment_method:</label>
                <span>
                    @if($order->payment_method==1)
                        <a class="badge badge-primary" style="background: deeppink">COD></a>
                    @endif
            </div>
        </div>
        
@endsection
