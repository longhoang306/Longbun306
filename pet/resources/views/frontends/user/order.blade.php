@extends('layouts.frontend')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Quantity</th>
                    <th>User_id</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Receiver_name</th>
                    <th>Total_price</th>
                    <th>Status</th>
                    <th>Note</th>
                    <th>Payment_method</th>
                    <th>
                        Chức năng
                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach ($data as $r)
                    <tr>
                        <td>{{$r->id}}</td>
                        <td>
                            {{$r->quantity}}
                        </td>
                        <td>{{$r->user_id}}</td>
                        <td>{{$r->address}}</td>
                        <td>
                            {{$r->phone}}
                        </td>
                        <td>{{$r->receiver_name}}</td>
                        <td>{{$r->total_price}}</td>
                        <td>
                            @if($r->status==0)
                                <span class="badge badge-primary" style="background: deeppink">pendding</span>
                            @endif
          
                            @if($r->status==1)
                                <span class="badge badge-primary" style="background: blue">Đã giao</span>
                            @endif

                            @if($r->status==2)
                                <span class="badge badge-primary" style="background: green">Đang giao</span>
                            @endif

                            @if($r->status==3)
                                <span class="badge badge-primary" style="background: rgb(20, 255, 137)">Đã nhận</span>
                            @endif

                            @if($r->status==4)
                                <span class="badge badge-primary" style="background: red">Đã hủy</span>
                            @endif
                          </td>
                        <td>{{$r->note}}</td>
                        <td>
                            
                            @if ($r->payment_method==1)
                            <span class="badge badge-primary" style="background: red">COD</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('user/orderdetail/'.$r->id)}}" style=" color: deeppink">Xem chi tiết</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $data->links() }}
        </div>
    </div>
    @endsection