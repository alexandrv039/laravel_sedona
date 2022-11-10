<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>HTML Academy: Седона</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>


<div class="page-container">

    <header class="page-header">

        <nav class="navigation">
            <a href="index.html" class="logo"><img src="images/logo.svg" width="139" height="70" alt="Логотип"></a>
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

        <div class="welcome-container">
            <img src="images/welcome.svg" width="458" height="352" class="welcome" alt="Welcome to the gardens">
        </div>

        <div class="main-heading">
            <h1 class="visually-hidden">Sedona</h1>
            <h2 class="main-heading-subtitle">Седона - небольшой городок в Аризоне, заслуживающий вашего внимания</h2>
            <p class="main-heading-text">Рассмотрим 5 причин, по которым Седона круче, чем Гранд-Каньон!</p>
        </div>

        <section class="advantages">
            <ul class="advantages-list">
                <li class="advantages-item">
                    <div class="advantages-content advantages-content-style4">
                        <h3 class="advantages-title">Настоящий городок</h3>
                        <span class="advantages-number">- №1 -</span>
                        <p class="advantages-description">
                            Седона — не аттракцион для туристов, там течёт своя жизнь
                        </p>
                    </div>

                    <div class="advantages-content-photo">
                        <img src="images/photo-1.jpg" width="800" height="384" class="photo1" alt="Фотография мотеля">
                    </div>

                <li class="advantages-item">
                    <div class="advantages-content advantages-content-style3 advantages-content-image">
                        <div class="image-home advantages-image">
                            <img src="images/home.png" alt="изображение с домом" width="75" height="72">
                        </div>
                        <h2 class="advantages-title">Жилье</h2>
                        <p class="advantages-description">
                            Рекомендуем пожить в настоящем мотеле,
                            всё как в кино!
                        </p>
                    </div>

                <li class="advantages-item">
                    <div class="advantages-content advantages-content-style1 advantages-content-image">
                        <div class="image-food advantages-image">
                            <img src="images/food.png" alt="изображение с едой" width="75" height="70">
                        </div>
                        <h2 class="advantages-title">Еда</h2>
                        <p class="advantages-description">
                            Всегда заказывайте
                            топовый фирменный бургер, вы не разочаруетесь!
                        </p>
                    </div>
                </li>

                <li class="advantages-item">
                    <div class="advantages-content advantages-content-style3  advantages-content-image">
                        <div class="image-vector advantages-image">
                            <img src="images/vector.png" alt="изображение с подарком" width="64" height="76">
                        </div>
                        <h2 class="advantages-title">Сувениры</h2>
                        <p class="advantages-description">
                            Не только китайского,
                            но и настоящего местного производства!
                        </p>
                    </div>
                </li>

                <li class="advantages-item">
                    <div class="advantages-content-photo">
                        <img src="images/photo-2.jpg" width="800" height="384" class="photo2" alt="Фотография моста дьявола">
                    </div>
                    <div class="advantages-content advantages-content-style4">
                        <h2 class="advantages-title">Там есть дьявол</h2>
                        <span>- №2 -</span>
                        <p class="advantages-description">
                            Да, по нему можно пройти! Если вы осмелитесь, разумеется
                        </p>
                    </div>
                </li>
                <li class="advantages-item">
                    <div class="advantages-content advantages-content-style2">
                        <h2 class="advantages-title">Небольшая площадь</h2>
                        <span>- №3 -</span>
                        <p class="advantages-description">
                            Все достопримечательности находятся очень близко
                        </p>
                    </div>
                </li>
                <li class="advantages-item">
                    <div class="advantages-content advantages-content-style3">
                        <h2 class="advantages-title">Красивая дорога</h2>
                        <span>- №4 -</span>
                        <p class="advantages-description">
                            Ехать в Седону из Лас-Вегаса совсем не скучно!
                        </p>
                    </div>
                </li>
                <li class="advantages-item">
                    <div class="advantages-content advantages-content-style2">
                        <h2 class="advantages-title">Мало туристов</h2>
                        <span>- №5 -</span>
                        <p class="advantages-description">
                            Большинство едет в Гранд Каньон и толпится там
                        </p>
                    </div>
                </li>
            </ul>
        </section>

        <section class="hotel-search">
            <h2 class="hotel-search-title">Заинтересовались?</h2>
            <p class="hotel-search-description">
                Укажите предполагаемые даты поездки, и мы покажем вам лучшие предложения гостиниц в Седоне
            </p>
            <div class="hotel-search-button-wrapper">
                <a href="catalog.html" class="button hotel-search-button">Поиск гостиницы в Седоне</a>
            </div>
        </section>

        <section class="subscribe">
            <form class="subscribe-form" action="https://echo.htmlacademy.ru/" method="post">
                <h2 class="subscribe-title">Подпишитесь на рассылку</h2>
                <p class="subscribe-description">Только полезная информация и никакого спама, честное бойскаутское!</p>
                <div class="subscribe-input-container">
                    <input type="email" name="email" placeholder="Ваш e-mail" class="subscribe-email">
                    <button class="button subscribe-button" type="submit">Подписаться</button>
                </div>
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
