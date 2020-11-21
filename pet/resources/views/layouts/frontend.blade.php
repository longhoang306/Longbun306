<!DOCTYPE html>
<!--
Template Name: A-Future HTML
Version: 1.0.0
Author: Webstrot
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<html lang="en">

@include('frontends.commons.head')

<body>

<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<!-- header start -->
<div class="header" style="width: 1580px">
    <div class="top-bar" style="height: 70px;background-image: linear-gradient(to right, #ff1464, purple)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6" style="font-size:17px;">
                    <div class="contact_info_wrapper">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i> nguyenduytrien2000@gmail.com</a></li>
                            <li class="contact_number_wrapper hidden-xs"><a href="#"><i class="fa fa-phone"></i> +1
                                    814 251 152</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                    <!-- signin_and_social_icon_wrapper -->
                    <div class="signin_and_social_icon_wrapper">
                        <ul>
                            <li class="social_icon_wrapper hidden-xs">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </li>
                            <!-- Cart Option -->
                            <li class="dropdown signin_wrapper" style="background: #990073;height:70px">

                                <?php
                                use Illuminate\Support\Facades\Auth;
                                ?>
                                @if (Auth::user()!=null)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                         Hello {{Auth::user()->fullname}}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{url('profile')}}">Profile
                                                <span>
                                                    <i class="fa fa-caret-right" style="margin-top:15px"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('user/order')}}">MyOrder
                                                <span>
                                                    <i class="fa fa-caret-right" style="margin-top:15px"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>        
                                <a href="{{url('singout')}}" style="margin-left: 10px">
                                    <i class="fa fa-sign-out" style="margin-top:19px"></i>
                                </a>
                                @else
                                    <a href="{{url('login')}}">
                                        <i class="fa fa-sign-in"></i> Login
                                    </a>
                                    /
                                    <a href="{{url('register')}}">
                                        Register
                                    </a>
                                @endif

                            </li>
                            <!-- /.Cart Option -->
                        </ul>
                    </div>
                    <!-- /.signin_and_social_icon_wrapper end -->
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <div class="main_menu_wrapper hidden-xs hidden-sm">
        @include('frontends.commons.nav')
    </div>
    <!-- .site-nav -->
    <div class="mobail_menu_main visible-xs visible-sm">
        <div class="navbar-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <a class="navbar-brand" href="index.html"><img src="imgs/logo_for_iOS.png" alt=""></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                        <button type="button" class="navbar-toggle collapsed" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('frontends.commons.sidebar')
    </div>
</div>
<!-- header end -->

<!-- page_header start -->
<div class="page_header" style="margin-top: 15px;">
    <div class="container">
        <div class="row">
            {{--            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-6">--}}
            {{--                <h1> Shop Fullwidth </h1>--}}
            {{--            </div>--}}
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="sub_title_section">
                    <ul class="sub_title">
                        <li><a href="#" style="margin-right:180px;font-size:16px">
                                @if(isset($parent))
                                    {{$parent}}
                                @else
                                    Home
                                @endif
                                <i class="fa fa-angle-down" aria-hidden="true" style="margin-right:60px"></i>
                            </a>   
                        </li>
                        <br>
                        <li>
                            @if(isset($child))
                                {{$child}}
                            @else

                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page_header end -->

<!-- shop_fulwidth_wrapper start -->
<div class="shop_fulwidth_wrapper">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    @section('content')

                    @show

                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop sidebar end -->

@include('frontends.commons.footer')
<style>
    .truncate {
        width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
</body>
</html>