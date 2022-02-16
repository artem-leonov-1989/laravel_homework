@extends('layouts.layout')
@section('name_page', 'Редактор справочников')
@section('content')
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-outline-dark" type="button" href="{{ route('workshops.index') }}">Цеха завода</a>
        <button class="btn btn-outline-dark" type="button">Button</button>
    </div>
@endsection
