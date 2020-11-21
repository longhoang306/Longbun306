@extends('layouts.frontend')
@section('content')
    <div class="container"  style="margin: 0;padding:0;margin-left:195px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card" style="border: #f30505c7 solid 2px;">
                    
                    <div class="card-header" style="background-image: linear-gradient(to right, #ff1464, purple);font-size:30px;text-align:center;height:50px;line-height:50px;color: white">
                        Profile
                    </div>

                    <div class="card-body">
                        <form method="POST" >
                            @csrf

                            <div class="form-group row" style="margin-top:15px">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" readonly value="{{$user->name}}">
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" readonly value="{{$user->email}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Full name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="fullname" value="{{$user->fullname}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-sm-4 col-form-label text-md-right">Address</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="address" value="{{$user->address}}">
                                </div>
                            </div>


                            <div>
                                <input type="submit" value="Save"
                                 style="background-image: linear-gradient(to right, #ff1464, purple);border:1px solid rgba(240, 82, 213, 0.589);width:100px;margin-left:350px;margin-bottom:10px;height:30px;color: white"/>
                            </div>
                                
                        </form>
                        <style>
                            .form-control {
                                    display: block;
                                    width: 100%;
                                    height: 34px;
                                    padding: 6px 12px;
                                    font-size: 14px;
                                    line-height: 1.42857143;
                                    color: #555;
                                    background-color: #fff;
                                    background-image: none;
                                    border: 1px solid #3ae32fad;
                                    border-radius: 4px;
                                    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                                    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                                    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                                   
                                }
                                .fa {
                                    display: inline-block;
                                    font: normal normal normal 14px/1 FontAwesome;
                                    font-size: inherit;
                                    text-rendering: auto;
                                    -webkit-font-smoothing: antialiased;
                                }
                                .col-form-label{
                                    text-align: right;
                                    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                                }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection