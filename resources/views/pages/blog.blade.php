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
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                @if($categories->count() > 0)
                                    @foreach($categories as $category)
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="{{ URL::to('product_by_category', ['id' => $category->id]) }}">{{ $category->name }}</a></h4>
                                            </div>
                                        </div>
                                    @endforeach

                                @else
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">No categories yet!</a></h4>
                                    </div>
                                @endif
                            </div><!--/category-products-->

                            <div class="shipping text-center"><!--shipping-->
                                <img src="{{ asset('app/images/home/shipping.jpg') }}" alt="" />
                            </div><!--/shipping-->

                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="blog-post-area">
                        <h2 class="title text-center">Latest From our Blog</h2>
                        @if($blogs->count() > 0)
                            @foreach($blogs as $blog)
                        <div class="single-blog-post">
                            <h3>{{ $blog->name }}</h3>
                            <div class="post-meta">
                                <ul>
                                    <li><i class="fa fa-user"></i> Fabrice</li>
                                    <!-- <li><i class="fa fa-clock-o"></i> 1:33 pm</li> -->
                                    <li><i class="fa fa-calendar"></i>{{ $blog->created_at->toFormattedDateString() }}</li>
                                </ul>
                                <span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
                            </div>
                            <a href="">
                                <img src="{{ $blog->image }}" alt="">
                            </a>
                            <p>{{ $blog->long_description }}</p>
                        </div>
                            @endforeach

                        @else
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">No Blog yet!</a></h4>
                            </div>
                        @endif
                        <div class="row pb120">
                            <ul class="pagination">
                                <li><a href="" class="active">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection