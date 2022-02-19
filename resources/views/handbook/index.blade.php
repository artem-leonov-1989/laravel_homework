@extends('layouts.layout')
@section('name_page', 'Редактор справочников')
@section('content')
    <div class="d-grid gap-2 col-4 mx-auto">
        <a class="btn btn-outline-dark" href="{{ route('workshops.index') }}">Цеха</a>
        <a class="btn btn-outline-dark" href="{{ route('machines.index') }}">Станки</a>
    </div>
@endsection
