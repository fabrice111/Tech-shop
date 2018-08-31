@extends('layouts.front')

@section('content')

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

                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="{{ $product->image }}" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-information"><!--/product-information-->
                                <img src="{{ URL::to('app/images/product-details/new.jpg') }}" class="newarrival" alt="" />
                                <h2>{{ $product->name }}</h2>
                                <p>Color: {{ $product->color }}</p>
                                <img src="{{ URL::to('app/images/product-details/rating.png') }}" alt="" />
                                <span>
                                    @guest

									<span>{{ $product->price }} Frw</span>
									    <a href="{{ route('login.check') }}" ><button type="button" class="btn btn-fefault cart">
										    <i class="fa fa-shopping-cart"></i>
										    Login first
									    </button>
                                        </a>
                                    </form>

                                    @else

                                    <span>{{ $product->price }} Frw</span>
                                    <form action="{{ route('cart.add') }}" method="post">
                                        @csrf
									    <label>Quantity:</label>
									    <input title="Qty" type="text" name="qty" value="1" />
                                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
									    <button type="submit" class="btn btn-fefault cart">
										    <i class="fa fa-shopping-cart"></i>
										    Add to cart
									    </button>
                                    </form>

                                    @endguest
								</span>

                                <p><b>Availability:</b> In Stock</p>
                                <p><b>Condition:</b> New</p>
                                <p><b>Category:</b> {{ $product->category->name }}</p>
                                <p><b>Size:</b> {{ $product->size }}</p>
                                <a href=""><img src="{{ URL::to('app/images/product-details/share.png') }}" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Details</a></li>
                                <li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="details" >
                                    <p>{{ $product->long_description }}</p>
                                </div>
                                <div class="tab-pane fade active in" id="reviews" >
                                    <div class="col-sm-12">
                                        <ul>
                                            <li><a href=""><i class="fa fa-user"></i>Fabrice</a></li>
                                            <!-- <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li> -->
                                            <li><a href=""><i class="fa fa-calendar-o"></i>{{ $product->created_at->toFormattedDateString() }}</a></li>
                                        </ul>
                                        <p>Dear our clients we are doing our best to bring best of the best of our products that matches with your desiders, So here
                                        is how we get to know your feel about our product. Please feel free to tell us how you feel or how you wish it to be like.</p>
                                        <p><b>Write Your Review</b></p>

                                        @include('pages.include.disqus')
                                    </div>
                                </div>

                            </div>
                        </div><!--/category-tab-->

                </div>
            </div>
      </div>
      </div>
    </section>

@endsection