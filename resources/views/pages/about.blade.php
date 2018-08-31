@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="row">
        @foreach($aboutuses as $aboutuses)
            <div class="col-sm-4">
                <div class="About-us">
                    <h2 class="title text-center">About Us</h2>
                    <address>
                        <p>{{ $aboutuses->sub_description }}</p>
                        <p>{{ $aboutuses->description }}</p>
                    </address>
                </div>
            </div>
        @endforeach    

    <div class="col-sm-4">
        <div class="contact-info">
            <h2 class="title text-center">Contact Info</h2>
            <address>
                <p>Tech-Shop</p>
                <p>MN 783 Musanze</p>
                <p>Musazne/ Rwanda</p>
                <p>Mobile: +250 7340 89 829</p>
                <p>Fax: 1-714-252-0026</p>
                <p>Email: info@techshop.com</p>
            </address>
            <div class="social-networks">
                <h2 class="title text-center">Social Networking</h2>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        </div>
    </div>

@endsection