<style>
    .welcome-window .btn {
        margin-bottom: 90px;
        height: 50px ;/* Отталкиваем кнопку вниз */
        width: 500px;
        font-size: 19px;
    }
    .welcome-window {
        position: fixed;
        bottom: 50%;
        left: 150px;
        height: 500px;
        width: 700px;
        transform: translateY(50%); /* Центрирование по вертикали */
        background-color: rgba(238, 215, 167, 0.7);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px #964e02;
        display: flex;
        flex-direction: column;  /* Располагаем элементы друг под другом */
        justify-content: center;
        align-items: center;      /* Центрируем по горизонтали */
    }
</style>
<!-- Окно(Организуй свою жизнь)-->
<div class="welcome-window">
    <h2>Организуй свой график -</h2>
    <h2>начни жить лучше </h2>
    <a href="/login" class="btn btn-primary">Начать</a>
</div>
