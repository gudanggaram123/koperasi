@extends('admin._layouts.index')

@push('cssScript')
@include('layouts.css.css-form')
@endpush

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit</h3>
                    </div> 
                    <form id="myForm" class="form-horizontal" method="post" action="{{ route('update.pinjamu') }}"
                        enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{$PinjamUang->id}}">

                        @include('admin.peminjaman_uang.edit_form')

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                            <a href="" class="btn btn-danger float-right" style="margin-right: 10px">Cancel</a>
                        </div>

                    </form>
                </div> 
            </div> 
        </div> 
</section>
<!-- /.content -->
@endsection


@push('jsScript')
@include('layouts.js.js-form')
@endpush