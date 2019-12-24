@extends('layouts.datatable')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
            <h3 class="box-title">Product Color List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th style="width:60px;">Product ID</th>
                <th>Product Name</th>
                <th>Product Color Name</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $productcolor)
                <tr>
                <td>{{$productcolor->productClr->id}}</td>
                <td>{{$productcolor->productClr->name}}</td>
                <td>{{$productcolor->color_name}}</td>
                <td>
                    <form action="{{ route('product-color.destroy', $productcolor->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure...?')"  class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><span class='glyphicon glyphicon-delete' ></span>Delete</a></button>
                </form>
            </td>
                </tr>
                @endforeach()
            </tbody>
            </table>
            {{ $data->links() }}
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