@extends('app.layouts')

@section('title', 'Create-District')
@section('buttonAdd')
    <a href="{{ route('districts.index') }}"><button class="btn btn-sm btn-outline-primary button-action-add-main">Назад</button></a>
@endsection
@section('content')

<div class="container">
    <div class="col-12">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Название</label>
                <input type="text" name="name" class="form-control"  >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Население</label>
                <input type="text" name="population" class="form-control"  >
            </div>
            {{--<div class="form-group">--}}
                {{--<label for="exampleFormControlSelect1">Example select</label>--}}
                {{--<select class="form-control" id="exampleFormControlSelect1">--}}
                    {{--<option>1</option>--}}
                    {{--<option>2</option>--}}
                    {{--<option>3</option>--}}
                    {{--<option>4</option>--}}
                    {{--<option>5</option>--}}
                {{--</select>--}}
            {{--</div>--}}

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Описание</label>
                <textarea class="form-control" name="description"  rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary button-new create-new" href="{{ route('districts.store') }}">Создать</button>
        </form>

    </div>
</div>
@endsection