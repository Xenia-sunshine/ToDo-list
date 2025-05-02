@extends('layouts.appforMessage')
@section('title-block')Все задачи@endsection
@section('content')
    <!--этот файл отвечает за вывод всех задач пользователей-->
    <style>


        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5dc;
        }

        .container {
            max-width: 1200px;
        }

        h1 {
            color: #000000;
            text-align: center;
        }


        .card {
            border: none;
            border-radius: 20px;
            transition: transform 0.2s ease-in-out;
        }

        /* Эффект при наведении на карточку */
        .card:hover {
            transform: translateY(-5px);
        }

        /* заголовок задачи */
        .card-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        /* описание задачи */
        .card-text {
            color: #964e02;
        }


        .card-footer {
            background-color: #eed7a7;
            border-top: 1px solid #964e02;
            padding: 0.75rem 1rem;
        }

        /* Задач нет */
        .alert-info {
            background-color: #e9ecef;
            border-color: #eed7a7;
            color: darkred;
            border-radius: 10px;
        }
    </style>
    <div class="container mt-4">
        <h1 class="mb-4">Задачи всех пользователей </h1>
        @if($data->isEmpty())
            <div class="alert alert-info text-center">
                Задач пока нет.
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($data as $el)
                    <div class="col">
                        <div class="card h-100 shadow">
                            <div class="card-body">
                                <h5 class="card-title">{{$el->title}}</h5>
                                <p class="card-text">{{ Str::limit($el->description, 150) }}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{$el->created_at->format('d.m.Y H:i')}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
