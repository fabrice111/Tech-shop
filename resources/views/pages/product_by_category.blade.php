@extends('layouts.front')

@section('content')

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach( $sliders as $slider )
                            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach( $sliders as $slider )
                            <div class="item {{ $loop->first ? ' active' : '' }}" >
                                <img src="{{ $slider->image }}" style="width: 40%; height: 90%;">
                            </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section><!--/slider-->


    <section>
        <div class="container">
            <div class="row">
                <div class="features_items"><!--features_items-->
                    @if($products->count() > 0)
                        <h2 class="title text-center">{{ $category->name }} Items</h2>
                        @foreach($category->products as $product)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ $product->image }}" alt="" />
                                            <h2>${{ $product->price }} Frw</h2>
                                            <a href="#"><p>{{ $product->name }}</p></a>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>${{ $product->price }} Frw</h2>
                                                <a href="{{ URL::to('product_single',['id' => $product->id]) }}"><p>{{ $product->name }}</p></a>
                                                <a href="{{ URL::to('product_single',['id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="{{ URL::to('product_single',['id' => $product->id]) }}"><i class="fa fa-plus-square"></i>View product</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @else
                        <tr>
                            <th>No Products Yet</th>
                        </tr>
                    @endif
                </div><!--features_items-->

            </div>
        </div>
    </section>


@endsection