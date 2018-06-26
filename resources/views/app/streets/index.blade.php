@extends('app.layouts')

@section('title', 'Street')

@section('buttonAdd')
    <button class="btn btn-sm btn-outline-primary button-action-add-main">Добавить</button>
@endsection

@section('content')

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Тип</th>
            <th scope="col">Ид_района</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($streets as $street)
            <tr>
                <td>{{ $street->name }}</td>
                <td>{{ $street->type }}</td>
                <td>{{ $street->district_id }}</td>
                <td width="20">
                    <button type="button"
                            class="btn btn-sm btn-primary button-action button-show"
                            href="{{ route('streets.show', ['street' => $street->id]) }}"
                    >
                        Просмотреть
                    </button>
                    <button type="button"
                            class="btn btn-sm btn-info button-action button-edit"
                            href="{{ route('streets.edit', ['street' => $street->id]) }}"
                    >
                        Редактировать
                    </button>
                    <button
                            type="button"
                            class="btn btn-sm btn-secondary button-action button-remove"
                            href="{{ route('streets.destroy', ['street' => $street->id]) }}"
                    >
                        Удалить
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection