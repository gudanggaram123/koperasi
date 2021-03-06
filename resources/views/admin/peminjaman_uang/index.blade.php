@extends('admin._layouts.index') @push('cssScript') @include('layouts.css.css-tabel') @endpush @section('content')

<section class="content">
    <div class="container-fluid">
        @include('sweetalert::alert')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Peminjaman</h3>
                        <div class="float-right">
                            <a href="{{ route('tambah_pinjamu') }}">
                                <button class="btn btn-primary btn-sm" id="add">
                                    <i class="fa fa-plus-circle"></i>
                                    Tambah Pinjaman
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
                                    <th>ID Transaksi</th>
                                    <th>Nama Nasabah</th>
                                    <th>Jumlah Pinjaman</th>
                                    <th>Bayar perbulan</th>
                                    <th>Bunga</th>
                                    <th>Tenor</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Status</th>
                                    <th width="50px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datau as $no => $v)

                                <tr>
                                    <td widtd="10px">{{ ++$no}}</td>
                                    <td>{{ $v->id_transaksi}}</td>
                                    <td>{{ App\Model\nasabah::find($v->id_nasabah)->nama }}</td>
                                    <td>{{ $v->jumlah_pinjaman}}</td>
                                    <td>{{ $v->bayar_perbulan}}</td>
                                    <td>{{ $v->bunga}}</td>
                                    <td>{{ $v->tenor}}</td>
                                    <td>{{ $v->tgl_pinjam}}</td>
                                    <td>{{ $v->tgl_kembali}}</td>
                                    <td>{{ $v->status ==1 ? "Belum Lunas" : "Lunas"}}</td>

                                    <td width="13%">
                                        @if( $v->status == 1 )
                                        <a href="{{route('tambah.pembayaran',$v->id)}}">
                                            <button class="btn btn-success btn-xs" id="bayar">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </a>
                                        @endif
                                        <a href="{{route('edit.pinjamu',$v->id)}}">
                                            <button class="btn btn-info btn-xs" id="add">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="{{route('delete.peminjaman_uang',$v->id)}}">
                                            <button class="btn btn-danger btn-xs" id="add">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                    @endforeach
                                </tr>
                                {{-- @endforeach --}}
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

@endsection @push('jsScript') @include('layouts.js.js-table') {{--
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
--}} @endpush
