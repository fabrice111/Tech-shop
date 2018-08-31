@extends('layouts.front')

@section('content')


    <section id="do_action">
        <div class="container">
            <div class="row">

                <div class="register-req">
                    <p>STEP 2: Please Choose your payment...........</p>
                </div><!--/register-req-->
                <div class="col-sm-8">
                    <div class="total_area">
                        <ul>
                            {{--<li>Cart Sub Total <span>{{ Cart::subtotal() }} Frw</span></li>--}}
                            {{--<li>Eco Tax <span>$2</span></li>--}}
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>{{ Cart::total() }} Frw</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="heading">
                <h3>Select which payment method you want to use</h3>
                <p>Choose whether you pay with card or cash in hand, we accept each of those.</p>
            </div>


            <p>@include('admin.include.errors')</p>
            <div class="row">
                    <div class="col-sm-6">
                        <div class="chose_area">
                            <form method="POST" action="{{ route('place.order') }}">
                                @csrf
                                <ul class="user_option">
                                    <li>
                                        <input type="radio" name="payment_method" value="handcash">
                                        <label>Cash in hand</label>
                                    </li>
                                </ul>
                                <ul>
                                <input class="btn btn-default check_out" type="submit" value="Continue">
                                @foreach(Cart::content() as $product)
                                <ul>
                                    <li>
                                        <input type="hidden" name="total" value="{{ Cart::total() }}">
                                    </li>
                                </ul>
                                @endforeach
                            </form>
                        </div>
                    </div>
            </div>

                                                    
                <form action="{{ route('cart.checkout') }}}" method="POST">
                    {{ csrf_field() }}
                    <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="pk_test_ffIv5hU8lFTzVRsjJvreEt6t"
                        data-amount="{{ Cart::total() }}"
                        data-name="Tech-Shop"
                    data-description="Buy product"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto">
                    </script>
                </form><br>   

            <div class="cheque">

                <div class="logos">
                    <a href="#" class="logos-item">
                        <img src="{{ asset('app/images/home/visa.png') }}" alt="Visa">
                    </a>
                    <a href="#" class="logos-item">
                        <img src="{{ asset('app/images/home/mastercard.png') }}" alt="MasterCard">
                    </a>
                    <a href="#" class="logos-item">
                        <img src="{{ asset('app/images/home/discover.png') }}" alt="DISCOVER">
                    </a>
                    <a href="#" class="logos-item">
                        <img src="{{ asset('app/images/home/amex.png') }}" alt="Amex">
                    </a>
                    <a href="#" class="logos-item">
                        <img src="{{ asset('app/images/home/pay-pal.png') }}" alt="Amex">
                    </a>

                 
                </div>
            </div>

        </div>
    </section><!--/#do_action-->


@endsection