<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ввод ID пользователя</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5dc;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .main-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            height: 300px;
            width: 100%;
        }

        h1 {
            color: #8B4513;
            text-align: center;
            margin-bottom: 15px;
        }

        h3 {
            color: #6c757d;
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #8B4513;
            margin-bottom: 8px;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #d3d3d3;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.2s ease-in-out;
            color: #333;
        }

        input[type="number"]:focus {
            border-color: #a0d468;
            outline: none;
            box-shadow: 0 0 0 2px rgba(160, 212, 104, 0.2);
        }

        .btn {
            background-color: #a0d468;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.05rem;
            transition: background-color 0.2s ease-in-out;
            width: 100%;
        }

        .btn:hover {
            background-color: #8cc63f;
        }
    </style>
</head>
<body>
<div class="main-container">
    <h1>Введите свой ID ;)</h1>
    <h3>(можно ввести номер телефона)</h3>
    @include('inc.messages')
    <form action="{{ route('id-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="user_id">Номер пользователя:</label>
            <input type="number" id="user_id" name="user_id" placeholder="Например: 1" required value="{{ old('user_id') }}">
        </div>
        <button type="submit" class="btn">Подтвердить</button>
        <h3>нужно для управления вашими задачами </h3>
    </form>
</div>
</body>
</html>
