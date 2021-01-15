@extends('admin._layouts.index')

@push('cssScript')
    @include('layouts.css.css-tabel')
@endpush

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-6">
        {{-- @include('alert') --}}
        @include('sweetalert::alert')

</div>
</div>
</div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data User</h3>
                            <div class="float-right">
                                <a href="{{ route('formin_nb') }}">
                                    <button class="btn btn-primary btn-sm" id="add"><i class="fa fa-plus-circle"></i>
                                        Add
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th width="15%">Kode Nasabah</th>
                                    <th width="15%">Nama Nasabah</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Ktp</th>
                                    <th width="50px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $no => $v)
                                    <tr>
                                    <td width="10px">{{ ++$no}}</td>
                                    <td>{{ $v->kd_nasabah}}</td>
                                    <td>{{ $v->nama}}</td>
                                    <td>{{ $v->username}}</td>
                                    <td>{{ $v->email}}</td>
                                    <td>{{ $v->alamat}}</td>
                                    <td>{{ $v->tempat_lahir}}</td>
                                    <td>{{ $v->tgl_lahir}}</td>
                                    <td>{{ $v->jkl}}</td>
                                    <td>{{ $v->no_ktp}}</td>
                                        <td width="13%">
                                <a href="{{route('edit_nb',$v->id)}}">
                                    <button class="btn btn-info btn-xs" id="add">
                                        <i class="fa fa-edit"></i>
                                    
                                    </button>
                                </a><a onclick="return confirm('anda yakin ingin menghpus {{$v->nama}}?')" href="{{route('delete_nb',$v->id)}})">
                                    <button class="btn btn-danger btn-xs" id="add" >
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

                            {{ $data->render() }}

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

