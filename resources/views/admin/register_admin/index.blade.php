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
                            <h3 class="card-title">Data Barang</h3>
                            <div class="float-right">
                                <a href="{{ route('tambah_brg') }}">
                                    <button class="btn btn-primary btn-sm" id="add"><i class="fa fa-plus-circle"></i>
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
                                    <th>Nama Barang</th>
                                    <th>Stok</th>
                                    <th>Status Barang</th>
                                    <th width="50px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $no => $v)

                                    <tr>
                                    <td widtd="10px">{{ ++$no}}</td>
                                    <td>{{ $v->nama_brg}}</td>
                                    <td>{{ $v->stok_brg}}</td>
                                    <td>{{ $v->status_brg}}</td>

                                    <td width="13%">

                                        <a href="{{route('show_brg',$v->id)}}">
                                    <button class="btn btn-info btn-xs" id="add">
                                        <i class="fa fa-edit"></i>
                                    
                                    </button>
                                </a><a href="{{ url('create') }}">
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
                        <div class="card-body">


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