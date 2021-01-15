@extends('admin._layouts.index')

@push('cssScript')
    @include('layouts.css.css-tabel')
@endpush


@section('content')

  <section class="content">
        <div class="container-fluid">
@include('sweetalert::alert')

            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                            @if ($data != null)
                            
            <div class="card-body box-profile">

                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/barru.png') }}"  alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">jjkkj</h3>


                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                  <b>Saldo :</b> <a class="float-right">{{$data->saldo}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Sisa Saldo :</b> <a class="float-right"></a>
                  </li>
                  
                  <li class="list-group-item">
                    <b>Profit :</b> <a class="float-right"></a>
                  </li>
                  
                   <li class="list-group-item">
                    <b>Desa :</b> <a class="float-right">{{$data->nama_desa}}</a>
                  </li>
                  
                  
                  <li class="list-group-item">
                    <b>Alamat :</b> <a class="float-right">{{$data->alamat}} </a>
                  </li>
                </ul>
                
              
                
                

              <a hrdivef="" class="btn btn-primary btn-block"><b>Update</b></a>
              </div>     
                            
                            
                            @else
                            
                                          <div class="card-body box-profile">

                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/barru.png') }}"  alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">jjkkj</h3>


                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Saldo :</b> <a class="float-right"></a>
                  </li>
                  <li class="list-group-item">
                    <b>Sisa Saldo :</b> <a class="float-right">........</a>
                  </li>
                  
                    <li class="list-group-item">
                    <b>Profit :</b> <a class="float-right">..........</a>
                  </li>
                  
                  <li class="list-group-item">
                    <b>Alamat :</b> <a class="float-right">.........</a>
                  </li>
                </ul>

              <a href="{{route('setup')}}" class="btn btn-primary btn-block"><b>tambah</b></a>
              </div>  
                            
                            @endif
               

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