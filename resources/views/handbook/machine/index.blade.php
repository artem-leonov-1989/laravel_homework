@extends('layouts.handbook')
@section('name_page', 'Список станков')
@section('search')
    <form class="d-flex ms-5" method="post" action="{{ route('machines.search') }}">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Поиск по инвентарному номеру" aria-label="Search"
               name="search">
        <button class="btn btn-outline-success" type="submit">Найти</button>
        @if(Route::currentRouteName() === 'machines.search')
            <a class="btn btn-outline-info ms-3" href="{{ route('machines.index') }}">Сброс</a>
        @endif
    </form>
@endsection
@section('handbook_item')
    @error('error_search')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror
    <table class="table table-striped w-75 ms-auto me-auto">
        <thead>
        <th scope="col">Инв.№</th>
        <th scope="col">Модель</th>
        <th scope="col">Заводской номер</th>
        <th scope="col">Год выпуска</th>
        <th scope="col">Производитель</th>
        <th scope="col">Цех</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </thead>
        <tbody>
        @if($machines_list)
            @if(Route::currentRouteName() === 'machines.search')
                <tr>
                    <th scope="row">{{ $machines_list->id }}</th>
                    <td>{{ $machines_list->model }}</td>
                    <td>{{ $machines_list->factory_number }}</td>
                    <td>{{ $machines_list->production_year }}</td>
                    <td>{{ $machines_list->company_manufacturer }}</td>
                    <td>{{ $machines_list->workshop->name }}</td>
                    <td><a class="btn btn-outline-primary"
                           href="{{ route('machines.edit', ['id' => $machines_list->id]) }}">Редактировать</a></td>
                    <td>
                        <form method="POST" action="{{route('machines.destroy', ['id' => $machines_list->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @else
                @foreach($machines_list as $machine)
                    <tr>
                        <th scope="row">{{ $machine->id }}</th>
                        <td>{{ $machine->model }}</td>
                        <td>{{ $machine->factory_number }}</td>
                        <td>{{ $machine->production_year }}</td>
                        <td>{{ $machine->company_manufacturer }}</td>
                        <td>{{ $machine->workshop->name }}</td>
                        <td><a class="btn btn-outline-primary"
                               href="{{ route('machines.edit', ['id' => $machine->id]) }}">Редактировать</a></td>
                        <td>
                            <form method="POST" action="{{route('machines.destroy', ['id' => $machine->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        @endif
        <tr>
            <td class="text-center" colspan="8"><a class="btn btn-outline-success" href="{{route('machines.create')}}">Добавить
                    новое оборудование</a></td>
        </tr>
        </tbody>
    </table>
    @if($machines_list and Route::currentRouteName() != 'machines.search')
        {{ $machines_list->links() }}
    @endif
@endsection
