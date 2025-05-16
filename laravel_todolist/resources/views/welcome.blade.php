<!DOCTYPE html>
<html lang="ru">
<!--главная страница сайта-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планировщик задач</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('{{ asset('https://cdn.lifehacker.ru/wp-content/uploads/2024/10/todoist_1729761353.jpg') }}');
            background-size: cover;
            background-color: #eed7a7;
        }

        .header-links a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            font-size: 28px
        }


        .welcome-window h2 {
            text-align: center;
            margin-bottom: 20px; /* отступ снизу между заголовками и кнопкой */
        }

        .welcome-window .btn {
            margin-bottom: 90px;
            height: 50px;
            width: 500px;
            font-size: 19px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

@include('header.header')
<!-- Окно приветствия -->
@include('aside')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
