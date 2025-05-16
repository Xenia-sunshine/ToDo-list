@extends('layouts.app')
@section('title-block')
    Обновление записи
@endsection
@section('content')
    <h1>Редактировать задачу</h1>

    <form action="{{ route('task-update-submit', ['id' => $data->id]) }}" method="get">
        @csrf
        <div class="form-group">
            <label for="user_id">ID пользователя:</label>
            <input type="number" value="{{$data->user_id}}" id="user_id" name="user_id" min="1">
        </div>
        <div class="form-group">
            <label for="title">Название </label>
            <input type="text" name="title" value="{{$data->title}}" placeholder="Введите название задачи " id="title"
                   class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea name="description" id="description" class="form-control"
                      placeholder="Введите описание">{{$data->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection

