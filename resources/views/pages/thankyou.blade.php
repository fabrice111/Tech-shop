@extends('layouts.front')

@section('content')


    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-sm-offset-1">
                    <div class="text-center">
                        <p>@include('admin.include.errors')</p>
                    </div>
                    <div class="login-form text-center"><!--login form-->
                        <h1>{{ Auth::user()->fullname }}</h1>
                    </div><!--/login form-->
                    <div class="login-form text-center"><!--login form-->
                        <h1>Thank you for ordering...</h1>
                        <h2>We will contact you as soon as possible</h2>
                    </div><!--/login form-->
                </div>
            </div>
        </div>
    </section><!--/form-->

@endsection


