@extends('layouts.dash')

@section('content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Blog</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Blog</h2>
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
                        <th>Blog Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @if($blogs->count() > 0)
                            @foreach($blogs as $blog)
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->name }}</td>
                                <td class="center">
                                    <a class="btn btn-danger" href="{{ route('blog.delete', ['id' => $blog->id]) }}">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                    </tr>
                    @endforeach

                    @else
                        <tr>
                            <th colspan="11" class="text-center">No Blog Yet</th>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->


@endsection