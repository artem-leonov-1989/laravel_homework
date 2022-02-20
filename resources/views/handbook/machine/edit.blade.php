@extends('layouts.handbook')
@section('name_page', 'Добавление станка')
@section('content')
    @error('save_error')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    <form class="form ms-auto me-auto form-create" action="{{ route('machines.update', ['id' => $machine->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id" class="form-label">Инвентарный номер по бухгалтерии</label>
            <input type="text" class="form-control" placeholder="Должно иметь 5-ть цифр" id="id" name="id" value="{{ $machine->id }}">
            @error('id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Модель станка</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $machine->model }}">
            @error('model')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="factory_number" class="form-label">Заводской номер станка (номер с шильдика)</label>
            <input type="text" class="form-control" id="factory_number" name="factory_number" value="{{ $machine->factory_number }}">
            @error('factory_number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="production_year" class="form-label">Год выпуска</label>
            <input type="text" class="form-control" id="production_year" name="production_year" value="{{ $machine->production_year }}">
            @error('production_year')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="company_manufacturer" class="form-label">Название фирмы-производителя</label>
            <input type="text" class="form-control" id="company_manufacturer" name="company_manufacturer" value="{{ $machine->company_manufacturer }}">
            @error('company_manufacturer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="workshop_id" class="form-label">Цех размещения</label>
            <select class="form-control form-select" id="workshop_id" name="workshop_id">
                @foreach($workshops_list as $workshop)
                    <option value="{{ $workshop->id }}" {{ $workshop->id === $machine->workshop_id ? 'selected' : '' }}>{{ $workshop->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection