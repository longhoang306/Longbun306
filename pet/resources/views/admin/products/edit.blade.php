@extends('layouts.admin')
@section('header')
    Products
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
                <input type="hidden" name="id" value="{{$product->id}}"/>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$product->title}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" value="{{$product->price}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content">{{$product->content}}</textarea>
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="quantity" value="{{$product->quantity}}" class="form-control">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    @foreach ($category as $r)
                        <div>
                            <span>{{$r->name}}</span>
                            <input type="checkbox" name="filter[]" value="{{$r->id}}|{{$r->filter_type_id}}"/>
                        </div>
                    @endforeach 
                </div>
                

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
© 2020 GitHub, Inc.