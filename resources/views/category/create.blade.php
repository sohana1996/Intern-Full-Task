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
                    <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('category.form')
                        <button type="submit" class="btn btn-raised btn-success btn-round waves-effect">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
