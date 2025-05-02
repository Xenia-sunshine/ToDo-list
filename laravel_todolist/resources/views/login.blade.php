<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в аккаунт</title>
    <style>
        body {
            background-image: url('{{ asset('https://irecommend.ru/sites/default/files/imagecache/copyright1/user-images/694219/70dD7fgmge50X7q3YjpFCQ.JPG') }}');
            background-size: cover;
            background-color: #eed7a7;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 56px);
            padding: 20px;
        }

        .login-container {
            color: black;
            width: 900px;
            padding: 30px;
            border: 1px solid #964e02;
            border-radius: 5px;
            background-color: rgba(238, 215, 167, 0.8);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .btn-success {
            background-color: #5cb85c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-success:hover {
            background-color: #449d44;
        }

        .forgot-password,
        .back {
            text-align: center;
            margin-top: 10px;
        }

        .bg-red {
            background-color: #eed7a7;
        }
    </style>

    <div class="container">
        <div class="login-container">
            <form action="{{ route('contact-form') }}" method="post">
                @csrf
                @include('inc.messages')
                <div class="form-group">
                    <label for="name">Логин</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Введите логин">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Введите email">
                </div>

                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Введите телефон">
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Введите пароль">
                </div>

                <button type="submit" class="btn btn-success">Отправить</button>
                <div class="back">
                    <a href="">Забыли пароль?</a>
                </div>
            </form>
            <div class="back">
                <a href="{{route('home')}}">Вернуться на главную страницу</a>
            </div>
        </div>
    </div>


