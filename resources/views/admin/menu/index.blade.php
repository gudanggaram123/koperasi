@extends('admin._layouts.index')

@push('cssScript')
    @include('layouts.css.css-tabel')
@endpush

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data {{ Helper::head($title) }}</h3>
                            <div class="float-right">
                                <a href="{{ route($title.'.create') }}">
                                    <button class="btn btn-primary" id="add"><i class="fa fa-plus-circle"></i> Add
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th width="10px">#</th>
                                    <th>Parent</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Url</th>
                                    <th>Index</th>
                                    <th>Display</th>
                                    <th width="50px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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

    <script>
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
                {data: 'parent'},
                {data: 'name'},
                {data: 'icon'},
                {data: 'url'},
                {data: 'index'},
                {data: 'display'},
                {data: 'action', orderable: false, searchable: false}
            ],
        });
    </script>
@endpush

