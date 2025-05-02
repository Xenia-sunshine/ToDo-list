@extends('layouts.appforMessage')

@section('title-block')
    Новая задача
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Создать задачу</h1>

        <form action="{{ route('task-form') }}" method="get" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="user_id">ID пользователя:</label>
                <input type="number" class="form-control" id="user_id" name="user_id" min="1" required value="{{ old('user_id') }}">
                <div class="invalid-feedback">
                    Пожалуйста, введите корректный ID пользователя.
                </div>
            </div>

            <div class="form-group">
                <label for="title">Название задачи:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Введите название задачи" required value="{{ old('title') }}">
                <div class="invalid-feedback">
                    Пожалуйста, введите название задачи.
                </div>
            </div>

            <div class="form-group">
                <label for="description">Описание задачи:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Введите описание задачи" rows="4" value="{{ old('description') }}"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Создать</button>
        </form>
    </div>
    <style>
        body {
            background-color: #f5f5dc;
        }
        .container {
            max-width: 900px;
        }

        .form-group {
            margin-bottom: 1.5rem;
            background-color: #eed7a7;
        }
    </style>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

@endsection
