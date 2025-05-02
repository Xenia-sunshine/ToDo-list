<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планировщик задач</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color:  #f5f5dc;
            font-family: sans-serif;
        }

        .header-links a {
            color: #fff;
            text-decoration: none;
            margin-right: 15px;
            font-size: 24px;
        }

        .welcome-window h2 {
            margin-bottom: 20px;
        }

        .welcome-window .btn {
            margin-bottom: 20px;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 5px;
        }

        .task-list {
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px #964e02;
        }

        .task-list h1 {
            margin-bottom: 15px;
            color: #343a40;
        }


    </style>
</head>
<body>
@include('inc.HeaderForTask')
<div class="container">
    <div class="task-list">
        <h1>Список моих задач</h1>
        @include('inc.messages')  -->
        <a href="{{ route('id-form-task') }}" class="btn btn-primary mb-3">Мои задачи</a>
    </div>

    <div class="task-list">
        <h1>Создать задачу</h1>
         -->
        <a href="{{ route('contact') }}" class="btn btn-success mb-3">Создать задачу</a>
        <ul class="list-group">
              @csrf
        </ul>
    </div>
</div>
<div class="container">
    <div class="task-list">
        <h1>Посмотреть все задачи</h1>
        -->
        <a href="{{ route('task-all') }}" class="btn btn-primary mb-3">Открыть список задач</a>
    </div>
    <div class="container">
        <div class="task-list">
            <h1>Инструкция по сайту</h1>
            -->
            <a href="{{route('instruction')}}" class="btn btn-danger mb-3">Добро пожаловать!</a>
            <h5>Обязательно прочитай перед использованием сайта</h5>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


