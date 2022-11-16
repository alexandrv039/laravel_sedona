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

    <main class="main-inner">

        <header class="inner-header">

            <div class="inner-header-wrapper">
                <h1 class="inner-header-title">Гостиницы Седоны</h1>

                <ul class="breadcrumbs">
                    <li class="breadcrumbs-item">
                        <a class="breadcrumbs-link" href="{{route('index')}}">Главная</a>
                    </li>
                    <li class="breadcrumbs-item">
                        <a class="breadcrumbs-link">Гостиницы</a>
                    </li>
                </ul>

                <section class="catalog-products">
                    <h2 class="visually-hidden">Список товаров с фильтрами</h2>
                </section>

                <form class="catalog-filter" action="https://echo.htmlacademy.ru/" method="get">

                    <fieldset class="catalog-filter-group">
                        <legend class="catalog-filter-title">Инфраструктура:</legend>
                        <ul class="catalog-filter-list">
                            <li class="catalog-filter-item">
                                <label class="control">
                                    <input class="control-input" type="checkbox" name="swimming pool" checked>
                                    <span class="control-text">Бассейн</span>
                                </label>
                            </li>
                            <li class="catalog-filter-item">
                                <label class="control">
                                    <input class="control-input" type="checkbox" name="parking" checked>
                                    <span class="control-text">Парковка</span>
                                </label>
                            </li>
                            <li class="catalog-filter-item">
                                <label class="control">
                                    <input class="control-input" type="checkbox" name="Wi-Fi">
                                    <span class="control-text">Wi-Fi</span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>

                    <fieldset class="catalog-filter-group">
                        <legend class="catalog-filter-title">Тип жилья:</legend>
                        <ul class="catalog-filter-list">
                            <li class="catalog-filter-item">
                                <label class="control">
                                    <input class="control-input" type="radio" name="product-group" value="hotel">
                                    <span class="control-text">Гостиница</span>
                                </label>
                            </li>
                            <li class="catalog-filter-item">
                                <label class="control">
                                    <input class="control-input" type="radio" name="product-group" value="motel" checked>
                                    <span class="control-text">Мотель</span>
                                </label>
                            </li>
                            <li class="catalog-filter-item">
                                <label class="control">
                                    <input class="control-input" type="radio" name="product-group" value="apartments">
                                    <span class="control-text">Апартаменты</span>
                                </label>
                            </li>
                        </ul>
                    </fieldset>

                    <fieldset class="catalog-filter-group">
                        <section class="price-filter">
                            <span class="price-filter-title">Стоимость, ₽:</span>
                            <div class="price-filter-from-to-wrapper">
                                <input type="number" class="price-filter-from" placeholder="0">
                                <input type="number" class="price-filter-to" placeholder="9000">
                            </div>
                        </section>
                    </fieldset>

                    <div class="catalog-filter-buttons">
                        <button class="button catalog-button-apply" type="submit">Применить</button>
                        <button class="button catalog-button-reset" type="reset">Сбросить</button>
                    </div>
                </form>
            </div>
        </header>

        <div class="catalog-header-container">

            <h2 class="catalog-title">Найдено гостиниц: 38</h2>

            <div class="filters">
                <select class="select-control" aria-label="Сортировка">
                    <option value="popular">Сначала популярные</option>
                    <option value="cheap">Сначала дешёвые</option>
                    <option value="expensive">Сначала дорогие</option>
                </select>
            </div>

            <div class="views-buttons">
                <a href="#" class="button view-button button-light">
                    <span class="visually-hidden">Показать плитку</span>
                </a>
                <a class="button view-button" href="#">
                    <span class="visually-hidden">Показать карточки</span>
                </a>
                <a href="#" class="button view-button button-light">
                    <span class="visually-hidden">Показать список</span>
                </a>
            </div>

        </div>

        <div class="catalog">



            <div class="catalog-list">

                @foreach($products as $product)

                    <div class="product-card">
                        <a class="product-card-link" href="{{route('products.show', ['id' => $product->id])}}">
                            <img class="product-card-image" src="{{$product->img}}" width="300" height="211" alt="">
                            <h3 class="product-card-title">{{$product->title}}</h3>
                        </a>
                        <p class="product-card-price">Гостиница от {{$product->price}} ₽</p>
                        <a class="product-card-button button" href="{{route('products.show', ['id' => $product->id])}}">Подробнее</a>
                        <a class="product-card-button button button-to-favorite" href="#">В избранное</a>
                        <img src="" alt="Рейтинг гостиницы" class="rating">
                        <span>{{ (empty($product->rating) ? 'Нет оценок' : 'Рейтинг ' . $product->rating) }}</span>
                    </div>

                @endforeach

            </div>

            <div class="catalog-footer">
                <div class="pagination">
                    <ul class="pagination-list">
                        <li class="pagination-item">
                            <a class="pagination-link pagination-current">1</a>
                        </li>
                        <li class="pagination-item">
                            <a class="pagination-link" href="#">2</a>
                        </li>
                        <li class="pagination-item">
                            <a class="pagination-link" href="#">3</a>
                        </li>
                        <li class="pagination-item">
                            <a class="pagination-link" href="#">4</a>
                        </li>
                        <li class="pagination-item">
                            <span>...</span>
                        </li>
                        <li class="pagination-item">
                            <a class="pagination-link" href="#">10</a>
                        </li>
                    </ul>
                </div>

                <div class="catalog-list-size">
                    <span>Гостиниц на странице:</span>
                    <select class="select-size-catalog-list" aria-label="Размер каталога">
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>

        </div>

        <section class="subscribe-catalog">
            <form class="subscribe-form" action="https://echo.htmlacademy.ru/" method="post">
                <h2 class="subscribe-title">Подпишитесь на рассылку</h2>
                <p class="subscribe-description">Только полезная информация и никакого спама, честное бойскаутское!</p>
                <input type="email" name="email" placeholder="Ваш e-mail" class="subscribe-email">
                <button class="button subscribe-button" type="submit">Подписаться</button>
            </form>
        </section>

    </main>

    <footer class="page-footer">
        <div class="footer-container">
            <section class="footer-social">
                <h2 class="page-footer-title visually-hidden">Социальные сети</h2>
                <ul class="footer-social-list">
                    <li class="footer-social-item">
                        <a class="button button-twitter" href="#">
                            <span class="visually-hidden">ВКонтакте</span>
                            <img src="images/vk.svg">
                        </a>
                    </li>
                    <li class="footer-social-item">
                        <a class="button button-vk" href="#">
                            <span class="visually-hidden">Facebook</span>
                            <img src="images/facebook.svg">
                        </a>
                    </li>
                    <li class="footer-social-item">
                        <a class="button button-instagram" href="#">
                            <span class="visually-hidden">YouTube</span>
                            <img src="images/youtube.svg">
                        </a>
                    </li>
                </ul>
            </section>
            <section class="contacts">
                <a class="contact-phone" href="tel:+78128121212">+7(812) 812-12-12</a>
            </section>

            <section class="html-academy">
                <h2 class="visually-hidden">Логотип Html academy</h2>
                <a href="#"><img src="images/html-academy.svg" class="logo-htmlacademy" alt="Логотип Html academy"></a>
            </section>
        </div>
    </footer>

</div>

</body>
</html>
