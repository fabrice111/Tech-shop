@extends('layouts.dash')

@section('content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">All Users</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Users</h2>
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
                        <th>User Id</th>
                        <th>User Names</th>
                        <th>User Email</th>
                        <th>User Phone number</th>
                        <th>Admin</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    @if($users->count() > 0)
                        @foreach($users as $user)
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ $user->phonenumber }}</td>
                            <td>
                            @if($user->admin)
                                <a href="" class="btn btn-sm btn-primary">Admin</a>
                            @else
                                <a href="" class="btn btn-sm btn-success">Client</a>
                            @endif
                            </td>

                    </tr>
                        @endforeach

                    @else
                        <tr>
                            <th colspan="11" class="text-center">No Users Yet</th>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->


@endsection