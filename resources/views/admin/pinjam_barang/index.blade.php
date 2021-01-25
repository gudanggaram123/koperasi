@extends('admin._layouts.index') @push('cssScript') @include('layouts.css.css-tabel') @endpush @section('content')

<section class="content">
    <div class="container-fluid">
        @include('sweetalert::alert')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Barang</h3>
                        <div class="float-right">
                            <a href="{{ route('createpj') }}">
                                <button class="btn btn-primary btn-sm" id="add">
                                    <i class="fa fa-plus-circle"></i>
                                    Tambah Barang
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="10px">No</th>
                                    <th>Nama Nasabah</th>
                                    <th>Barang Pinjaman</th>
                                    <th>Tgl Pinjaman</th>
                                    <th>Tgl Kembali</th>
                                    <th>Harga Sewa Perhari</th>
                                    <th>Total Harga Sewa</th>
                                    <th>Denda</th>
                                    <th>Status</th>
                                    <th width="50px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $value)

                                <tr>
                                    <td width="10px">{{$no++}}</td>
                                    <td>{{$value->nama}}</td>
                                    <td>{{$value->nama_brg}}</td>
                                    <td>{{$value->tgl_pinjam}}</td>
                                    <td>{{$value->tgl_kembali}}</td>
                                    <td>{{$value->hrg_sewa}}</td>
                                    <td>{{$value->total_sewa}}</td>
                                    <td>{{$value->denda}}</td>
                                    <td>{{$value->status_brg  == 1 ? "Belum Dikembalikan" : "Dikembalikan"}}</td>

                                    <td width="13%">
                                        @if( $value->status_brg == 1 )
                                        <a href="{{route('pengembalian.barang',$value->pbrg_id)}}">
                                            <button class="btn btn-success btn-xs" id="bayar">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </a>
                                        @endif
                                        <a href="#">
                                            <button class="btn btn-info btn-xs" id="add">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button class="btn btn-danger btn-xs" id="add">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body"></div>

                    <!-- /.card-body -->
                </div>

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection @push('jsScript') @include('layouts.js.js-table') 
{{--
<script>
    $("#example2").DataTable({
        processing: true,
        serverSide: true,
        paging: true,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        // dom: 'Bfrtip',
        ajax: "{{route($title)}}",
        columns: [{ data: "number", orderable: false, searchable: false }, { data: "name" }, { data: "username" }, { data: "email" }, { data: "role" }, { data: "action", orderable: false, searchable: false }],
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print' // 'pageLength',
        // ]
    });
</script>
--}} 
@endpush
