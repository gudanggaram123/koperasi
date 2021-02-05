@extends('admin._layouts.index')

@push('cssScript')
    @include('layouts.css.css-form')
@endpush

@section('content') 
    <section class="content">
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-12"> 
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Unduh Laporan Peminjaman</h3>
                        </div> 
                        <form id="myForm" class="form-horizontal" method="POST" action="{{ route('export.pembayaran')}}"
                              enctype="multipart/form-data">
                            {{csrf_field()}}
                            
                            @include('admin.report.angsuran')

                            <div class="card-footer"> 
                                <button type="submit" class=" btn btn-primary float-right">Save</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-12"> 
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Unduh Laporan Peminjaman Barang</h3>
                        </div> 
                        <form id="myForm" class="form-horizontal" method="POST" action="{{ route('export.barang')}}"
                              enctype="multipart/form-data">
                            {{csrf_field()}}
                            
                            @include('admin.report.angsuran')

                            <div class="card-footer"> 
                                <button type="submit" class=" btn btn-primary float-right">Save</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section> 
@endsection

@push('jsScript')
    @include('layouts.js.js-form')
@endpush
