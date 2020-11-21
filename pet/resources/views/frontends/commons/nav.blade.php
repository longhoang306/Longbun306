<?php
use App\FilterType;$products = \Cart::session('cart')->getContent();
$totalProduct = 0;
foreach ($products as $r) {
    $totalProduct += $r->quantity;
}
?>
<nav class="navbar mega-menu navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header hidden-xs hidden-sm">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('imgs/logo 1.png')}}" alt="" style="height: 70px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" style="margin-top:15px">
            <ul class="nav navbar-nav navbar-right">
                <li class="active dropdown">
                    <a href="{{url('/')}}">
                        Home
                    </a>
                </li>

                <?php
                    $filterTypes = FilterType::with('filtersValue')->where('type', '1')->get();
                ?>
                @foreach($filterTypes as $r)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            {{$r->name}}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach($r->filtersValue as $filterValue)
                                <li>
                                    <a href="{{url('filter/'.$filterValue->id.'?filter_name='.$r->name.'&filter_value_name='.$filterValue->name)}}">
                                        {{$filterValue->name}}
                                        <span>
                                            <i class="fa fa-caret-right"></i>
                                        </span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                @endforeach
                <li class="active dropdown">
                    <a href="#" style="color: black">
                        News
                    </a>
                </li>
                <li class="active dropdown" style="margin-top:28px;">
                    <form class="search_form" role="search" method="get" action="{{url('search')}}">
                        <div class="form-group">
                            <input type="text" name="q" class="form-control" placeholder="Search" style="color: red">
                        </div>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <!-- Cart Option -->
                <li class="dropdown cart_dropdown_wrapper">
                    <a href="{{url('cart')}}"><i
                            class="fa fa-shopping-cart"></i>
                        <span id="cart-badge" class="badge badge-warning">{{$totalProduct}}</span>
                    </a>
                </li>
                <!-- /.Cart Option -->
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>