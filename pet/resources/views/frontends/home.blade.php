@extends('layouts.frontend')
    
@section('content')
@include('frontends.commons.banner')
<div class="shop_full_width">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sidebar_widget">
            <div class="elementor-widget-container">
                <h3 class="elementor-headline"> 
                    <span class="elementor-headline-plain-text elementor-headline-text-wrapper">
                        Sản phẩm mới nhất
                    </span> 
                </h3>
                <style>
                    .elementor-headline-plain-text{
                        font-family: 'Brush Script MT';
                        font-size:45px;
                        margin-left: 350px;
                        margin-top: 50px;
                        color: orange;
                    }
                </style>
            </div>
            <div class="filter-area">
                <select>
                    <option>short by</option>
                    <option>Laptop</option>
                    <option>usb cable</option>
                    <option>cpu</option>
                </select>

            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="tab-content btc_shop_index_content_tabs_main">
            <div id="grid" class="tab-pane fade in active">
                <div class="row">

                    @foreach ($products as $item)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{url('product-detail/'.$item->id)}}">
                        <div class="btc_shop_indx_cont_box_wrapper">
                            <div class="btc_shop_indx_img_wrapper">
                                <ul>
                                    <li class="btc_shop_price" style="background-color: #ff6962;">hot</li>
                                </ul>
                                
                               
                                @if ($item->images!=null && count($item->images)>0)
                                 <img src="{{asset('storage/'.$item->images[0]->path)}}" alt="shop_img" class="img-responsive" style="height:300px"/>
                                @else
                                <img src="{{asset('no-photo.jpg')}}" alt="shop_img" class="img-responsive" style="height:300px"/>
                                @endif
                                {{-- <div class="cc_li_img_overlay">
                                    <div class="cc_li_img_text">
                                        <ul>
                                            <li><a href="#" style="background:#f44277"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" style="background:#f44277"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#" style="background:#f44277"><i class="fa fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="btc_shop_indx_img_cont_wrapper">

                                <h1><a href="#" class="truncate">{{$item->title}}</a></h1>
                                <h5 class="price" style="margin-right:80px">$ {{$item->price}}</h5>
                                <div class="cc_li_cont_wrapper">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach

                 

                </div>
            </div>
            {{--  <div id="list" class="tab-pane fade">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="btc_shop_indx_cont_list_box_wrapper shop_fullwidth_list_wrapper">
                            <div class="btc_shop_list_img_wrapper">
                                <ul>
                                    <li class="btc_shop_list_price">new</li>
                                </ul>
                                <img src="images/shop/li_img1.jpg" alt="shop_img" class="img-responsive" />
                            </div>
                            <div class="btc_shop_list_img_cont_wrapper">
                                <h1><a href="#">WESTERN WEAR RED</a></h1>
                                <h2>$  156</h2>
                                <del>$ 250</del>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do enim ad minimveniam, quis do enim ad minimven trud exercitation ullamco.</p>
                                <div class="cc_shop_list">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="btc_shop_list_bottom_social_wrapper ">
                                    <ul>
                                        <li class="shop_list_first_btn"><a href="#"><i class="fa fa-heart"></i>wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i>add to cart</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  --}}
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <!-- blog_pagination_section start -->
    <div class="shop_pagination_section">
        {{ $products->links() }}
            <style>
            .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
        z-index: 3;
        /* color: #fff;
        cursor: default; */
        background-color:  #f44277;
        border-color:  #f44277;
                }
            </style>
    </div>
    <!-- blog_pagination_section end -->
</div>
@endsection