@extends('admin._layouts.index')

@push('cssScript')
    @include('layouts.css.css-tabel')
@endpush


@section('content')

  <section class="content">
        <div class="container-fluid">
@include('sweetalert::alert')

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pembayaran</h3>
                            <div class="float-right">
                                <a href="{{ route('index.pembayaran') }}">
                                    <button class="btn btn-primary btn-sm" id="add"><i class="fa fa-plus-circle"></i>
                                        Tambah Pembayaran
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
                                    <th>id Transaksi</th> 
                                    <th>Jumlah Pinjaman</th>
                                    <th>Pembayaran Ke</th>
                                    <th>Denda</th>
                                    <th>Status</th>
                                    <th width="50px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datau as $no => $v) 

                                    <tr>
                                        <td widtd="10px">{{ ++$no}}</td>
                                        <td>{{ $v->id_transaksi}}</td> 
                                        <td>{{ $v->jumlahbayar}}</td>
                                        <td>{{ $v->tenor}}</td>
                                        <td>{{ $v->denda}}</td>
                                        <td>{{ $v->status ==1 ? "Belum Lunas" : "Lunas"}}</td> 
                                        <td width="13%"> 
                                            <a href="{{route('edit.pembayaran',$v->id)}}">
                                                <button class="btn btn-info btn-xs" id="add">
                                                    <i class="fa fa-edit"></i> 
                                                </button>
                                            </a>
                                            <a href="{{route('delete.pembayaran',$v->id)}}">
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
                        <div class="card-footer">
                            {{ $datau->links() }}

                        </div>

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

@endsection


@push('jsScript')
    @include('layouts.js.js-table')

    {{-- <script>
        $('#example2').DataTable({
            processing: true,
            serverSide: true,
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            // dom: 'Bfrtip',
            ajax: '{{route($title)}}',
            columns: [
                {data: 'number', orderable: false, searchable: false},
                {data: 'name'},
                {data: 'username'},
                {data: 'email'},
                {data: 'role'},
                {data: 'action', orderable: false, searchable: false}
            ],
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print' // 'pageLength',
            // ]
        });
    </script> --}}
@endpush