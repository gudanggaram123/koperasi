@extends('admin._layouts.index') @push('cssScript') @include('layouts.css.css-form') @endpush @section('content')
 
<section class="content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit</h3>
                    </div> 
                    <form id="myForm" class="form-horizontal" method="post" action="{{ route('update.pembayaran') }}" enctype="multipart/form-data">
                        @csrf @include('admin.pembayaran._form')
                        <input type="hidden" value="{{ $data->id }}" name="id">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                            <a href="" class="btn btn-danger float-right" style="margin-right: 10px;">Cancel</a>
                        </div>
                    </form>
                </div> 
            </div>
        </div> 
    </div> 
</section> 
@endsection @push('jsScript') @include('layouts.js.js-form') @endpush
