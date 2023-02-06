<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>HTML Academy: {{$projectTitle}}</title>
</head>
<body>

    <header class="page-header">

        <a href="index.html" alt="Логотип седона"></a>

        <nav class="page-navigation">

            <ul class="page-navigation-list">
                <li class="page-navigation-button">
                    <a href="index.html">Главная</a>
                </li>
                <li class="page-navigation-button">
                    <a href="index.html">О Седоне</a>
                </li>
                <li class="page-navigation-button">
                    <a href="index.html">Гостиницы</a>
                </li>
            </ul>

            <ul class="page-navigation-list">
                <li class="page-navigation-button">
                    <a href="index.html"><span class="visually-hidden">Поиск</span></a>
                </li>
                <li class="page-navigation-button">
                    <a href="index.html"><span class="visually-hidden">Лайк</span></a>
                </li>
                <li class="page-navigation-button">
                    <a href="index.html" class="button"><span>Хочу сюда!</span></a>
                </li>
            </ul>

        </nav>

    </header>

    <main class="main-catalog">

        <section class="catalog-filters">

            <h2 class="catalog-title">Гостиницы Седоны</h2>

            <ul class="page-path-list">
                <li class="page-path-item">Главная</li>
                <li class="page-path-item">Гостиницы</li>
            </ul>

            <div class="filter-infrastructure">
                <p>Инфраструктура:</p>
                <input type="checkbox" name="infrastructure-checkbox" value="Бассейн">
                <input type="checkbox" name="infrastructure-checkbox" value="Парковка">
                <input type="checkbox" name="infrastructure-checkbox" value="wi-fi">
            </div>

        </section>

        <section class="catalog-container"></section>

    </main>

    <footer>

        <section class="mailing-list-container">
            <h2>Подпишитесь на рассылку</h2>
            <p>Только полезная информация и никакого спама, честное бойскаутское!</p>
            <form action="#">
                <input type="email" placeholder="Ваш e-mail">
                <button type="submit" class="email-button">Подписаться</button>
            </form>
        </section>

        <section class="footer-contacts">
            <ul class="messenger-list">
                <li class="messenger-item"><a href="#"><span class="visually-hidden">VK</span></a></li>
                <li class="messenger-item"><a href="#"><span class="visually-hidden">Telegram</span></a></li>
                <li class="messenger-item"><a href="#"><span class="visually-hidden">YouTube</span></a></li>
            </ul>

            <p>+7 (812) 812-12-12</p>

            <a href="#">Htmlacademy</a>

        </section>

    </footer>

</body>
</html>
