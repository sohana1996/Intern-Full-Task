@extends('layouts.datatable')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Category List</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('category.create') }}"
                                                           class="btn btn-primary">Create</a></li>

                        </ol>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="width:60px;">ID</th>
                                <th>Category Name</th>
                                <th>Category Details</th>
                                <th>Category Image</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->details}}</td>
                                <td>
                                    @if($data->image)
                                        <img src="{{ asset('media/category/'. $data->image) }}" width="50">
                                    @endif
                                </td>
                                <td>{{$data->status}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection
