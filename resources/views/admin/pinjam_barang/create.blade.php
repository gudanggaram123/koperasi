@extends('admin._layouts.index')

@push('cssScript')
    @include('layouts.css.css-form')
@endpush

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                    <!-- Horizontal Form -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Pinjam Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="myForm" class="form-horizontal" method="POST" action="{{ route('store_brg')}}"
                              enctype="multipart/form-data">
                              {{csrf_field()}}
                            
                            @include('admin.pinjam_barang._form')

                            <div class="card-footer">
                                {{-- <button type="submit" class="btn btn-primary float-right">Save</button> --}}
                                <button type="submit" class=" btn btn-primary float-right">Save</button>
                            <a href="{{route('view_nb')}}" class="btn btn-danger float-right"
                                   style="margin-right: 10px">Cancel</a>
                            </div>

                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('jsScript')
    @include('layouts.js.js-form')
@endpush
