@extends('layouts.handbook')
@section('costume_css')
    <link rel="stylesheet" href="{{ asset('css/handbook.css') }}">
@endsection
@section('name_page', "Справочник цехов")
@section('handbook_item')
    <table class="table table-workshop table-striped ms-auto me-auto">
        <thead>
            <th scope="col">Название</th>
            <th scope="col">Код подразделения</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </thead>
        <tbody>
            @foreach($workshops_list as $workshops)
                <tr>
                    <td>{{ $workshops->name }}</td>
                    <td>{{ $workshops->division_code }}</td>
                    <td><a class="btn btn-outline-primary" href="{{ route('workshops.edit', ['id' => $workshops->id]) }}">Редактировать</a></td>
                    <td>
                        <form method="POST" action="{{route('workshops.destroy', ['id' => $workshops->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td class="text-center" colspan="4"><a class="btn btn-outline-success" href="{{route('workshops.create')}}">Добавить новое подразделение</a></td>
            </tr>
        </tbody>
    </table>
@endsection
