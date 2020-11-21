@extends('layouts.frontend')

@section('content')
<div class="container" style="margin: 0;padding:0;margin-left:195px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: #f30505c7 solid 2px;">
                <div class="card-header" 
                style="background-image: linear-gradient(to right, #ff1464, purple);font-size:30px;font-family:'Times New Roman', Times, serif;text-align:center;height:50px;line-height:50px;color:white">
                    {{ __('Login') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row" style="margin-top:15px">
                            <label for="email" class="col-sm-4 col-form-label text-md-right" style="text-align:right;font-size:15px">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus style="border: 1px solid #3ae32fad;">
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
                                <i class="fa fa-lock" style="position: absolute;top: 10px;right: 25px;"></i>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="text-align:center">
                                <button type="submit" class="btn btn-primary" style="background-image: linear-gradient(to right, #ff1464, purple);border:1px solid rgba(240, 82, 213, 0.589);width:200px;margin-left:300px" >
                                    {{ __('Login') }}
                                    <i class="fa fa-send"></i>
                                </button>
                                <br>
                                <div class="form-check"  style="text-align:center;font-size:15px;margin-left:300px;margin-top:10px">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color:deeppink;margin-left:300px">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
