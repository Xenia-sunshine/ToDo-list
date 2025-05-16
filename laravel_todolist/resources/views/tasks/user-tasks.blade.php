<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задачи пользователя</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5dc;
            margin: 0;
            padding: 20px;
        }

        .main-container {
            max-width: 960px;
            margin: 0 auto;
        }

        .tasks-container {
            text-align: center;
        }

        h2 {
            color: #8B4513;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #a0d468;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.2s ease-in-out;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #8cc63f;
        }


        .task-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .task-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: transform 0.2s ease-in-out;
        }

        .task-item:hover {
            transform: translateY(-5px);
        }

        .task-item strong {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #8B4513;
        }


        .hhh {
            margin-top: 15px;
            text-align: right;
        }

        .btf {
            display: inline-block;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            margin-left: 8px;
            font-weight: 500;
            border: none;
        }

        .btf-primary {
            background-color: #4caf50;
            color: white;
        }

        .btf-primary:hover {
            background-color: #388e3c;
        }

        .btf-danger {
            background-color: #f44336;
            color: white;
        }

        .btf-danger:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
<div class="main-container">
    <div class="tasks-container">
        <h2>Задачи пользователя с ID: {{ $user_id }}</h2>
        <div class="task-grid">
            @foreach($tasks as $task)
                <div class="task-item">
                    <strong>Название:</strong> {{ $task->title }}<br>
                    <strong>Описание:</strong> {{ $task->description }}<br>
                    <strong>твой личный номер :</strong> {{ $task->user_id }}
                    <div class="hhh">
                        <a href="{{route('task-update',['id' => $task->id])}}"><button class="btf btf-primary">Редактировать</button></a>
                        <a href="{{route('task-delete',['id' => $task->id])}}"><button class="btf btf-danger">Удалить</button></a>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('index') }}" class="btn">Вернуться на главную страницу</a>
    </div>
</div>
</body>
</html>
