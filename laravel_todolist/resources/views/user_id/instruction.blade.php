@include('layouts.appforMessage')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Как пользоваться сайтом планировщика задач</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #eed7a7;
            color: #000000;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }


        #how-to-use h2 {
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        #how-to-use ol {
            padding-left: 20px;
        }

        #how-to-use li {
            margin-bottom: 10px;
        }

        .container {
                width: 90%;
        }

    </style>
</head>
<body>
<section id="how-to-use">
    <div class="container">
        <h2>Как пользоваться сайтом планировщика задач</h2>
        <ol>
            <li>
                <strong>Регистрация/Авторизация:</strong>
                <ul>
                    <li>Если вы впервые на сайте, зарегистрируйтесь, указав логин пользователя, адрес электронной почты и пароль.</li>
                    <li>Если у вас уже есть аккаунт, войдите, используя свои учетные данные.</li>
                </ul>
            </li>
            <li>

                <strong>Управление ваших задач(Удаление/редактирование)</strong>
                <ul>
                    <li>Нажмите кнопку "Мои задачи"
                    <li>Придумайте свой личный ID(можно ввести номер телефона)
                    <li>Под этим номером будут хранится все ваши задачи </li>
                    <li>Удаляйте/редактируйте задачи </li>
                </ul>
            </li>
            <li>
                <strong>Создание новой задачи:</strong>
                <ul>
                    <li>Нажмите кнопку "Создать задачу"
                    <li>Введите свой личный ID-номер,создайте задачу</li>
                </ul>
            </li>
            <li>
                <strong>Посмотреть все задачи пользователей</strong>
                <ul>
                    <li>Нажмите на кнопку"Открыть список задач"</li>
                </ul>
            </li>
        </ol>
    </div>
</section>

</body>
</html>
