@extends('layouts.dash')

@section('content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">All Shippingss</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Shippings</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            @include('admin.include.errors')
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Shipping Id</th>
                        <th>Shipping User Fullname</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @if($shippings->count() > 0)
                            @foreach($shippings as $shipping)
                                <td>{{ $shipping->id }}</td>
                                <td>{{ $shipping->user_fullname }}</td>
                                <td>{{ $shipping->created_at->toFormattedDateString() }}</td>
                                <td class="center">

                                    <a class="btn btn-info" href="{{ route('view.shipping.single',['id' => $shipping->id]) }}">
                                        <i class="halflings-icon white eye"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{ route('shipping.delete', ['id' => $shipping->id]) }}">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                    </tr>
                    @endforeach

                    @else
                        <tr>
                            <th colspan="11" class="text-center">No Products Yet</th>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <div class="pagination pagination-centered">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div><!--/row-->


@endsection