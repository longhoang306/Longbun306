@extends('layouts.frontend')

@section('content')
<div class="container" style="margin: 0;padding:0;margin-left:180px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: #3a3b3b70 solid 2px;">
                <div class="card-header" 
                    style="background-image: linear-gradient(to right, #ff1464, purple);font-size:30px;font-family:'Times New Roman', Times, serif;text-align:center;height:50px;line-height:50px;color:white">
                        {{ __('Register') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row" style="margin-top: 15px;">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="text-align:right;font-size:15px">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus style="border: 1px solid #3ae32fad">
                                <i class="fa fa-user" style="position: absolute;top: 10px;
                                right: 20px;"></i>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="text-align:right;font-size:15px">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required style="border: 1px solid #3ae32fad;">
                                <i class="fa fa-envelope" style="position: absolute;top: 10px;
                                right: 20px;"></i>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="text-align:right;font-size:15px">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required style="border: 1px solid #3ae32fad;">
                                <i class="fa fa-lock" style="position: absolute;top: 10px;
                                right: 23px;"></i>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="text-align:right;font-size:15px">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required style="border: 1px solid #3ae32fad;">
                                <i class="fa fa-lock" style="position: absolute;top: 10px;
                                right: 23px;"></i>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" style="text-align:center">
                                <button type="submit" class="btn btn-primary" style="color:rgb(248, 244, 244);background-image: linear-gradient(to right, #ff1464, purple);border:1px solid rgba(240, 82, 213, 0.589);width:200px;margin-left:300px">
                                    {{ __('Register') }}
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true" style="margin-left: 10px"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
