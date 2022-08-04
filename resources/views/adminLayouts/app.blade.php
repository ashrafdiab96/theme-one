@extends('adminLayouts.layout')

@section('main-admin-content')

@include('adminLayouts.navbar')

<div class="content-wrapper">
    @yield('admin-content')
</div>

@include('adminLayouts.footer')

@endsection
