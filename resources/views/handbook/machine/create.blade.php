@extends('layouts.handbook')
@section('name_page', 'Добавление станка')
@section('content')
    <form class="form ms-auto me-auto form-create" action="{{ route('machines.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Инвентарный номер по бухгалтерии</label>
            <input type="text" class="form-control" placeholder="Должно иметь 5-ть цифр" id="id" name="id" value="{{ old('id') }}">
            @error('id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Модель станка</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}">
            @error('model')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="factory_number" class="form-label">Заводской номер станка (номер с шильдика)</label>
            <input type="text" class="form-control" id="factory_number" name="factory_number" value="{{ old('factory_number') }}">
            @error('factory_number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="production_year" class="form-label">Год выпуска</label>
            <input type="text" class="form-control" id="production_year" name="production_year" value="{{ old('production_year') }}">
            @error('production_year')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="company_manufacturer" class="form-label">Название фирмы-производителя</label>
            <input type="text" class="form-control" id="company_manufacturer" name="company_manufacturer" value="{{ old('company_manufacturer') }}">
            @error('company_manufacturer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="workshop_id" class="form-label">Цех размещения</label>
            <select class="form-control form-select" id="workshop_id" name="workshop_id">
                @foreach($workshops_list as $workshop)
                    <option value="{{ $workshop->id }}">{{ $workshop->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection