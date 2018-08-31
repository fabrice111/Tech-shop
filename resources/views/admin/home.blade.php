@extends('layouts.dash')

@section('content')



                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="#">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">Dashboard</a></li>
                </ul>

                <div class="row-fluid">

                    <div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
                        <div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
                        <div class="number">{{ $categories_count }}<i class="icon-arrow-up"></i></div>
                        <div class="title">Categories</div>
                        <div class="footer">
                            <a href="{{ route('categories') }}"> see full report</a>
                        </div>
                    </div>
                    <div class="span3 statbox green" onTablet="span6" onDesktop="span3">
                        <div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
                        <div class="number">{{ $payments_count }}<i class="icon-arrow-up"></i></div>
                        <div class="title">Payments</div>
                        <div class="footer">
                            <a href="{{ route('manage.payment') }}"> see full report</a>
                        </div>
                    </div>

                </div>

                <div class="row-fluid">

                    <a class="quick-button metro yellow span2">
                        <i class="icon-group"></i>
                        <p>Users</p>
                        <span class="badge">{{ $users_count }}</span>
                    </a>
                    <a class="quick-button metro blue span2">
                        <i class="icon-shopping-cart"></i>
                        <p>Orders</p>
                        <span class="badge">{{ $shipping_count }}</span>
                    </a>
                    <a class="quick-button metro green span2">
                        <i class="icon-barcode"></i>
                        <p>Products</p>
                        <span class="badge">{{ $products_count }}</span>
                    </a>
                    <a class="quick-button metro red span2">
                        <i class="icon-comments-alt"></i>
                        <p>Blogs</p>
                        <span class="badge">{{ $blogs_count }}</span>
                    </a>

                    <div class="widget yellow span4 noMargin" onTablet="span12" onDesktop="span4">
                        <h2><span class="glyphicons fire"><i></i></span> Server Load</h2>
                        <hr>
                        <div class="content">
                            <div id="serverLoad2" style="height:224px;"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div><!--/row-->







@endsection