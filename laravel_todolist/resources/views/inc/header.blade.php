<style>
    /*Шапка профиля для главной страницы*/
    .py-3 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .bg-custom {
        background-color: #eed7a7;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 15px;
        padding-right: 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-left: -15px;
        margin-right: -15px;

    }

    .align-items-center {
        align-items: center;
    }

    .col-6 {
        flex: 0 0 auto;
        width: 50%; /* Каждая колонка занимает 50% ширины */
        padding-left: 15px;
        padding-right: 15px;
    }

    /* Стили для логотипа */
    .navbar-brand {
        display: inline-block; /* Чтобы можно было задать размеры */
        height: 70px;
    }

    .fixed-logo {
        position: fixed;
        top: 6px; /* Отступ от верхнего края */
        left: 10px; /* Отступ от левого края */
        z-index: 1000;

    }

    /* Стили для ссылок */
    .text-end {
        text-align: right;
    }


    .header-links a {
        color: #fff;
        text-decoration: none;
        margin-right: 10px;
        font-size: 28px
    }

    .dropdown {
        display: inline-block; /* Чтобы элементы стояли в ряд */
        position: relative;
    }

    .dropdown-button {
        background-color: #f0f0f0;
        border: none;
        color: #212529; /* Цвет текста */
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
        margin-right: 10px; /* Отступ справа */
    }

    .dropdown-button:hover {
        background-color: #ddd;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 5px;
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
        display: block; /*  наведение*/
    }

    .dropdown-icon {
        display: inline-block;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #212529;
        margin-left: 5px;
    }
</style>
<header class="bg-custom py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <a class="navbar-brand fixed-logo" href="/">
                    <img
                        src="https://avatars.mds.yandex.net/i?id=7770313b3de913db227ade717a2fbc26ab49599c-5483025-images-thumbs&n=13"
                        alt="Логотип компании" width="200" height="60">
                </a>
            </div>
            <div class="col-6 text-end">
                <div class="dropdown">
                    <button class="dropdown-button">
                        Ресурсы
                        <span class="dropdown-icon"></span>
                    </button>
                    <div class="dropdown-content">
                        <a href="">Инструменты</a>
                        <a href="#">Шаблоны</a>
                        <a href="#">Другое</a>
                    </div>
                </div>
                <a href="" class="me-3 link-dark text-decoration-none">Решения</a>
                <a href="" class="me-3 link-dark text-decoration-none">Цены</a>
                <a href="{{route('login')}}" class="btn btn-danger me-2">Вход</a>
                <a href="{{route('registration-form')}}" class="btn btn-success">Регистрация</a>
            </div>
        </div>
    </div>
</header>
