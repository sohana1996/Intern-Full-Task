@extends('layouts.datatable')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Product List</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('product.create') }}" class="btn btn-primary">Create</a>
                            </li>

                        </ol>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Color</th>
                                <th>Product Details</th>
                                <th>Product Original Price</th>
                                <th>Product Discount Percentage</th>
                                <th>Product Discount Ammount</th>
                                <th>Product Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>
                                    @foreach($productImgs as $pimg)
                                @if($pimg->image)
                                    <img src="{{ asset('media/product/'. $pimg->image) }}" width="50">
                                @endif
                                @endforeach
                                </td>
                                <td>
                                    @foreach($productcolors as $pcolor)
                                    
                                    {{$pcolor->color_name}},
                                  
                                    @endforeach
                                </td>
                                <td>{{$product->details}}</td>
                                <td>{{$product->original_price}}</td>
                                <td>{{$product->discount_percentage}}</td>
                                <td>{{$product->discount_amount}}</td>
                                <td>{{$product->price}}</td>
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
