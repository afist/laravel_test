@extends('app.layouts')

@section('title', 'District')

@section('content')

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Население</th>
            <th scope="col">Описание</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $district->name }}</td>
                <td>{{ $district->population }}</td>
                <td>{{ $district->description}}</td>
                <td width="20">
                    <button type="button"
                            class="btn btn-sm btn-primary button-action button-show"
                            href="{{ route('districts.index') }}"
                    >
                        Назад
                    </button>
                    <button type="button"
                            class="btn btn-sm btn-info button-action button-edit"
                            href="{{ route('districts.edit', ['district' => $district->id]) }}"
                    >
                        Редактировать
                    </button>

                </td>
            </tr>
        </tbody>
    </table>

@endsection