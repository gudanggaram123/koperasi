@extends('admin._layouts.index')

@push('cssScript')
    @include('layouts.css.css')
@endpush

@section('content')

    <router-view name="dasborIndex"></router-view>
                        <div class="card-body">
                            <div><h1>Selamat Datang</h1></div>
                        </div>
    <router-view></router-view>


@endsection

@push('jsScript')
    @include('layouts.js.js')
@endpush
