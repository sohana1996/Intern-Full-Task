@extends('layouts.datatable')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Product List</h3>
                    </div>
                    <div class="col-sm-2">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('product.create') }}" class="btn btn-primary">Create</a>
                            </li>

                        </ol>
                    </div>
                    <form class="form-inline" action="{{ route('product.index') }}" method="get">

                        <div class="form-group">

                            <input type="text" name="search" class="form-control" placeholder="search by product name">
                        </div>
                        <div class="form-group">
                            <select class="form-control custom-select" name="status">
                                <option selected disabled>Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control custom-select" name="category_id">
                                <option selected disabled>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
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
                                <th>Product Name</th>
                                <th>Product Details</th>
                                <th>Product Original Price</th>
                                <th>Product Discount Percentage</th>
                                <th>Product Discount Ammount</th>
                                <th>Product Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->details}}</td>
                                    <td>{{$product->original_price}}</td>
                                    <td>{{$product->discount_percentage}}</td>
                                    <td>{{$product->discount_amount}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->status}}</td>
                                    <td>
                                        <form action="{{ route('product.destroy', $product->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('product.edit',$product->id) }}"
                                               class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round"><span
                                                    class='glyphicon glyphicon-pencil'></span></a>
                                            <a href="{{route('product.show',$product->id)}}"
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
