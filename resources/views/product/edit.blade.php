@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
        <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Category</h3>
                </div>
                    <form method="post" action="{{ route('product.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        
          
<div class="box-body">
    <div class="form-group">
        <label>Category</label>
        <select class="form-control custom-select" name="category_id">
            <option selected disabled>Select Category</option>
            @foreach($category as $category)
            <?php
                $selected = ($data['category_id']==$category['id'])?'selected':'';
                echo '<option value="'.$category->id.'" '.$selected.'>'.$category->name.'</option>';
            ?>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', isset($data->name) ? $data->name:'') }}" placeholder="Enter Product Name">
    </div>
    <div class="form-group">
        <label>Product Details</label>
        <textarea name="details" class="form-control" placeholder="Enter Product Details">{{old('details', isset($data->details) ? $data->details:'') }}</textarea>
    </div>
    <div class="form-group">
        <label>Product original price</label>
        <input type="text" class="form-control" name="original_price" value="{{ old('original_price', isset($data->original_price) ? $data->original_price:'') }}" placeholder="Enter Product original price">
    </div>
    <div class="form-group">
        <label>Discout Percentage</label>
        <input type="text" class="form-control" name="discount_percentage" value="{{ old('discount_percentage', isset($data->discount_percentage) ? $data->discount_percentage:'') }}" placeholder="Enter Discout Percentage">
    </div>
    <div class="form-group">
        <label>Discount Ammount</label>
        <input type="text" class="form-control" name="discount_amount" value="{{ old('discount_amount', isset($data->discount_amount) ? $data->discount_amount:'') }}" placeholder="Enter Discount Ammount">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price" value="{{ old('price', isset($data->price) ? $data->price:'') }}" placeholder="Enter Price">
    </div>
    <div class="form-group">
        <div class="">
            <input type="radio" name="status" id="active" class="with-gap" value="active" {{ isset($data->status) && $data->status == 'active' ? 'checked':'' }}>
            <label for="active">Active</label>
        </div>
        <div class="">
            <input type="radio" name="status" id="inactive" class="with-gap" value="inactive" {{ isset($data->status) && $data->status == 'inactive' ? 'checked':'' }}>
            <label for="inactive">Inactive</label>
        </div>
    </div>
</div>
          
          
        
                        <button type="submit" class="btn btn-raised btn-success btn-round waves-effect">Update</button>
                    </form>
                </div>
            </div> 
        </div>
    </section>
@endsection