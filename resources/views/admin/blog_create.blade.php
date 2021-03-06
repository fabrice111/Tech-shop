@extends('layouts.dash')

@section('content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="#">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Add Blog</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Blog</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            @include('admin.include.errors')
            <div class="box-content">
                <form class="form-horizontal" action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Blog Name</label>
                            <div class="controls">
                                <input type="text" name="name" class="input-xlarge">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Blog Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on" name="image" id="fileInput" type="file">
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Blog Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="long_description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Blog</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->



@endsection