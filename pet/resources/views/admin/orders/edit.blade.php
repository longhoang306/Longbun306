@extends('layouts.admin')
@section('header')
    Orders
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post">
            @csrf
            <div class="card-body">
                <input type="hidden" name="id" value="{{$order->id}}"/>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" name="quantity" value="{{$order->quantity}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>User_id</label>
                    <input type="text" name="user_id" value="{{$order->user_id}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="{{$order->address}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="phone" value="{{$order->phone}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Receiver_name</label>
                    <input type="text" name="receiver_name" value="{{$order->receiver_name}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Total_price</label>
                    <input type="number" name="total_price" value="{{$order->total_price}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                       
                         <option value="0">pending</option>
                         <option value="1">Đã giao</option>
                         <option value="2">Đang giao</option>
                         <option value="3">Đã nhận</option>
                         <option value="4">Đã hủy</option>
                        
                    </select>
                    
                </div>
            
                <div class="form-group">
                    <label>Note</label>
                    <textarea class="form-control" name="note">{{$order->note}}</textarea>
                </div>

                <div class="form-group">
                    <label>Payment_method</label>
                    <select class="form-control" name="payment_method">
                       
                         <option value="1">COD</option>
                        
                    </select>
                </div>

                {{-- <div class="form-group">
                    <label>payment_method</label>
                    <input type="text" name="payment_method" value="{{$order->payment_method}}" class="form-control">
                </div> --}}

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
© 2020 GitHub, Inc.