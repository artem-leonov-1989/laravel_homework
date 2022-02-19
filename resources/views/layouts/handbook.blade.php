@extends('layouts.layout')
@section('costume_css')
    <link rel="stylesheet" href="{{ asset('css/handbook.css') }}">
@endsection
@section('content')
    <div class="d-flex justify-content-center ms-auto me-auto">
        <a class="btn btn-outline-dark" href="{{ route('handbook') }}">К списку справочников</a>
    </div>
    @yield('handbook_item')
@endsection
