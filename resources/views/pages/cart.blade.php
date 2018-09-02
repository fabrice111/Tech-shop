@extends('layouts.front')

@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Image</td>
                    <td class="description">Name</td>
                    <td class="price">Price</td>
                    <td class="quantity">Quantity</td>
                    <td class="total">Total</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach(Cart::content() as $product)
                <tr>
                    <td class="cart_product">
                        <a href=""><img src="{{ asset($product->model->image) }}" alt="product" width="70px" height="85px"></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="{{ URL::to('product_single',['id' => $product->id]) }}">{{ $product->name }}</a></h4>
                        <!-- <p>Only {{$product->stock}} left</p> -->
                    </td>
                    <td class="cart_price">
                        <p>{{ $product->price }} Frw</p>
                    </td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <form action="{{ route('update.cart') }}" method="post">
                                {{csrf_field()}}  
                            <input class="cart_quantity_input" value="{{ $product->qty }}" type="text" name="qty" autocomplete="off" size="1">
                            <input value="{{ $product->rowId }}" type="hidden" name="rowId">
                            <input type="submit" name="submit" value="update" class="btn btn-sm btn-default">
                            </form>
                        </div>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">{{ $product->total }} Frw</p>
                    </td>
                    <td class="cart_delete">
                        <a class="cart_quantity_delete" href="{{ route('cart.delete', ['id' => $product->rowId]) }}"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="total_area">
                    <ul>
                        {{--<li>Cart Sub Total <span>{{ Cart::subtotal() }} Frw</span></li>--}}
                        {{--<li>Eco Tax <span>$2</span></li>--}}
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>{{ Cart::total() }} Frw</span></li>
                    </ul>
                    <div class="text-center">
                    <a class="btn btn-default check_out" href="{{ route('checkout') }}">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->

@endsection