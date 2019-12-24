
@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-6">
        <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Product</h3>
                </div>
                    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('product.form')
                        @include('product.form_colors')
                        @include('product.form_images')
                       
                        <button type="submit" class="btn btn-raised btn-success btn-round waves-effect">Submit</button>
                    </form>
                </div>
            </div> 
        </div>
    </section>
@endsection
