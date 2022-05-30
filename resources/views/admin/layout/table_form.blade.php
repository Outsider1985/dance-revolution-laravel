@extends('admin.layout.master')

@section('content')
    <div class="admin-container">
        <div class="table-container">
            @yield('table')
        </div>

        <div class="form-container">
            @yield('form')
        </div>
    </div>
@endsection