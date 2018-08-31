@extends('layouts.dash')

@section('content')


    <div class="row-fluid sortable">
        <div class="box span6">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Details</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Phone Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $shipping->user_fullname }}</td>
                        <td>{{ $shipping->user_phonenumber }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

        <div class="box span6">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Product Shipping Details</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                {{--@foreach($shipping->product as $product)--}}
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Products Names</th>
                        <th>Products Price</th>
                        <th>Products Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$shipping->product_name}}</td>
                        <td>{{ $shipping->product_price }} Frw</td>
                        <td>{{ $shipping->product_quantity }}</td>
                    </tr>
                    </tbody>
                </table>
                 {{--@endforeach--}}
            </div>
        </div><!--/span-->

    <div class="box span12">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Shipping Details</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>City</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $shipping->id }}</td>
                    <td>{{ $shipping->email }}</td>
                    <td>{{ $shipping->firstname }}</td>
                    <td>{{ $shipping->lastname }}</td>
                    <td>{{ $shipping->address }}</td>
                    <td>{{ $shipping->phonenumber }}</td>
                    <td>{{ $shipping->city }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div><!--/span-->
    </div><!--/row-->





@endsection