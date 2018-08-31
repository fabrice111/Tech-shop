@extends('layouts.front')

@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shipping</li>
            </ol>
        </div><!--/breadcrums-->
        <div class="register-req">
            <p>STEP 1: Please fill the from...........</p>
        </div><!--/register-req-->

        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-12 clearfix">
                    <div class="text-center">
                        <p>@include('admin.include.errors')</p>
                    </div>
                    <div class="bill-to">
                        <p>Shipping details</p>
                        <div class="form-one">
                            <form method="POST" action="{{ route('shipping.store') }}">
                                @csrf
                                <input type="text" name="email" placeholder="Email">
                                <input type="text" name="firstname" placeholder="First Name">
                                <input type="text" name="lastname" placeholder="Last Name">
                                <input type="text" name="address" placeholder="Address">
                                <input type="text" name="phonenumber" placeholder="Phone Number">
                                <input type="text" name="city" placeholder="City">
                                <input type="hidden" name="user_phonenumber" value="{{ Auth::user()->phonenumber }}">
                                <input type="hidden" name="user_fullname" value="{{ Auth::user()->fullname }}">
                                <input type="submit" class="btn btn-default" value="Done">
                                @foreach(Cart::content() as $products)
                                <input type="hidden" name="product_name" value="{{ $products->name }}">
                                <input type="hidden" name="product_price" value="{{ $products->price }}">
                                <input type="hidden" name="product_quantity" value="{{ $products->qty }}">
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->

@endsection