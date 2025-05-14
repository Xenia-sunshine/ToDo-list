@extends('layouts.app')

@section('title-block')
    {{$data->title}}
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{$data->title}}</h1>
            </div>
            <div class="card-body">
                <p class="card-text">{{$data->message}}</p>
                <h5 class="card-title">{{$data->title}}</h5>
                <p class="card-text">{{$data->description}}</p>
                <p class="card-text"><small class="text-muted">Создано: {{$data->created_at}}</small></p>
                <div class="buttons">
                    <a href="{{route('id-form',['id' => $data->id])}}" class="btn btn-primary">Вернуться назад</a>
                    <a href="{{route('index',['id' => $data->id])}}" class="btn btn-danger">Вернуться на главную
                        страницу</a>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 800px;
        margin-top: 5px;
    }

    .card {
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        border-radius: 10px;
    }

    .card-header {
        background-color: #fff;
        border-bottom: none;
        padding: 25px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 25px;
    }

    h1.card-title {
        font-size: 2.2rem;
        color: #343a40;
        margin-bottom: 15px;
    }

    h5.card-title {
        font-size: 1.5rem;
        color: #495057;
        margin-bottom: 10px;
    }

    p.card-text {
        color: #6c757d;
        line-height: 1.6;
    }

    .buttons {
        margin-top: 30px;
        text-align: right;
    }

    .btn {
        padding: 12px 25px;
        border-radius: 8px;
        font-weight: 500;
        transition: transform 0.2s ease-in-out;
        margin-left: 10px;
    }

    .btn:hover {
        transform: translateY(-3px);
    }

    /* Цвета для кнопок */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #c82333;
    }
</style>
