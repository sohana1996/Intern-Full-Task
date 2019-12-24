@extends('layouts.datatable')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Category List</h3>
                    </div>
                    <div class="col-sm-2">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('category.create') }}"
                                                           class="btn btn-primary">Create</a></li>

                        </ol>
                    </div>

                    <form class="form-inline" action="{{ route('category.index') }}" method="get">

                        <div class="form-group">

                            <input type="text" name="search" class="form-control" placeholder="search by Category name">
                        </div>
                        <div class="form-group">
                            <select class="form-control custom-select" name="status">
                                <option selected disabled>Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Search">
                    </form>
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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $category)
                                <tr>
                                    <td>{{$category->id }}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->details}}</td>
                                    <td>
                                        @if($category->image)
                                            <img src="{{ asset('media/category/'. $category->image) }}" width="50">
                                        @endif
                                    </td>
                                    <td>{{$category->status}}</td>
                                    <td>
                                        <form action="{{ route('category.destroy', $category->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('category.edit',$category->id) }}"
                                               class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><span
                                                    class='glyphicon glyphicon-pencil'></span></a>
                                            <a href="{{route('category.show',$category->id)}}"
                                               class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><span
                                                    class='glyphicon glyphicon-view'></span>View</a>
                                            <button type="submit" onclick="return confirm('Are you sure...?')"
                                                    class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round">
                                                <span class='glyphicon glyphicon-delete'></span>Delete</a></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach()
                            </tbody>
                        </table>
                        {{ $data->appends($_GET)->links() }}
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
