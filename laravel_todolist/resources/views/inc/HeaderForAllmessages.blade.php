<style>
    /* Шапка профиля */

    .bg-custom {
        background-color: #eed7a7;
    }

    .align-items-center {
        align-items: center;
    }


    .navbar-brand {
        display: inline-block;
        height: 70px;
    }

    .fixed-logo {
        position: fixed;
        top: 6px; /* Отступ от верхнего края */
        left: 10px; /* Отступ от левого края */
        z-index: 1000;
    }

    /* Стили для кнопки "Акции" */
    .btn-danger {
        color: white;
    }


    .header-actions {
        display: flex;
        justify-content: flex-end;
        align-items: center; /* Вертикальное выравнивание */
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
            <div class="col-6 header-actions">
                <a href="{{route('index')}}" class="btn btn-danger">Назад</a>
            </div>
        </div>
    </div>
</header>
