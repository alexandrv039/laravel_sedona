<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="page-container">

    <header class="page-header">

        <nav class="navigation">
            <a href="{{route('index')}}" class="logo"><img src="images/logo.svg" width="139" height="70" alt="Логотип"></a>
            <ul class="navigation-list navigation-links">
                <li class="navigation-item"><a href="{{route('index')}}">Главная</a></li>
                <li class="navigation-item"><a href="{{route('about')}}">О Седоне</a></li>
                <li class="navigation-item"><a href="{{route('catalog')}}">Гостиницы</a></li>
            </ul>

            <ul class="navigation-list navigation-buttons">
                <li class="navigation-button">
                    <a class="find-button" href="#">
                        <span class="visually-hidden">Найти</span>
                    </a>
                </li>
                <li class="navigation-button">
                    <a class="like-button" href="#">
                        <span class="visually-hidden">Лайк</span>
                    </a>
                </li>
                <li class="navigation-button">
                    <a class="button" href="#">Хочу сюда!</a>
                </li>
            </ul>
        </nav>

    </header>

</div>
