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
                    <form method="post" action="{{ route('category.update', $data->id) }}"
                          enctype="multipart/form-data">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        @include('category.form')
                        <button type="submit" class="btn btn-raised btn-success btn-round waves-effect">Update</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12">
                @if( isset($data->image))
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            <a href="{{ asset('media/category/'. $data->image) }}">
                                <img class="img-fluid img-thumbnail" src="{{ asset('media/category/'. $data->image) }}"
                                     width="300">
                            </a>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </section>
@endsection
