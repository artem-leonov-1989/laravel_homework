@extends('layouts.handbook')
@section('name_page', 'Список станков')
@section('handbook_item')
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
        @foreach($machines_list as $machine)
            <tr>
                <th scope="row">{{ $machine->id }}</th>
                <td>{{ $machine->model }}</td>
                <td>{{ $machine->factory_number }}</td>
                <td>{{ $machine->production_year }}</td>
                <td>{{ $machine->company_manufacturer }}</td>
                <td>{{ $machine->workshop->name }}</td>
                <td><a class="btn btn-outline-primary" href="{{ route('workshops.edit', ['id' => $machine->id]) }}">Редактировать</a></td>
                <td>
                    <form method="POST" action="{{route('machines.destroy', ['id' => $machine->id])}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td class="text-center" colspan="8"><a class="btn btn-outline-success" href="{{route('machines.create')}}">Добавить новое оборудование</a></td>
        </tr>
        </tbody>
    </table>
    {{ $machines_list->links() }}
@endsection
