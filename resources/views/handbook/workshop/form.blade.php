@extends('layouts.layout')
@section('costume_css')
    <link rel="stylesheet" href="{{ asset('css/workshop.css') }}">
@endsection
@section('name_page', 'Добавление подразделения')
@section('content')
    <form class="form ms-auto me-auto form-create" action="{{ route('workshops.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="InputName" class="form-label">Название подразделения</label>
            <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="InputDivisionCode" class="form-label">Код подразделения</label>
            <input type="text" class="form-control" id="InputDivisionCode" name="division_code" value="{{ old('division_code') }}">
            @error('division_code')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
