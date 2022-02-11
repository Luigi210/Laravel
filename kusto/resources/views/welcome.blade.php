<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/app.css">
        
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="body">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="{{url('/')}}">
                        <img src="{{asset('/images/logo-header.svg')}}" alt="">
                    </a>
                    <button class="burger">
                        <span class="burger-line"></span>
                    </button>
                    <div class="header__item-box"></div>
                    <div class="header__item">
                        <div class="header__language">
                            <a class="header__language-ru" href="#?">
                                ru
                            </a>
                            <a class="header__language-kz" href="#?">
                                kz
                            </a>
                            <a class="header__language-en" href="#?">
                                en
                            </a>
                        </div>
                        <nav class="header__nav">
                            <ul class="header__list">
                                <li class="header__list-item">
                                    <a class="header__list-link" href="{{url('/about')}}">
                                        О фонде
                                    </a>
                                </li>
                                <li class="header__list-item">
                                    <a class="header__list-link" href="{{url('/projects')}}">
                                        Наши проекты
                                    </a>
                                </li>
                                <li class="header__list-item">
                                    <a class="header__list-link" href="#!">
                                        Отчёты
                                    </a>
                                </li>
                                <li class="header__list-item">
                                    <a class="header__list-link" href="#!">
                                        Контакты
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header__contacts">
                            <p class="header__contacts-phone">
                                8 800 808-00-80
                            </p>
                            <a class="header__contacts-email" href="#?">
                                Kustohelp@gmail.com
                            </a>
                            <a class="header__contacts-whatsaap" href="#?">
                                Написать нам
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="main">

            <section class="intro" style="background-image: url({{asset('/images/bg/intro-bg.jpg')}})">
                <div class="intro-box">
                    <div class="container">
                        <div class="intro__slider">
                            <div class="intro__content">
                                <h1 class="intro__content-title">
                                    Благотворительный<span>ФОНД</span>
                                </h1>
                                <p class="intro__content-text page__text">
                                    Благотворительный проект #KustoHelp создан международной компанией Kusto Group и направлен на оказание помощи наиболее пострадавшим и уязвимым группам населения на период чрезвычайного положения, объявленной по причине пандемии коронавируса COVID-19 в
                                    Республике Казахстан
                                </p>
                                <div class="intro__content-bottom">
                                    <button class="intro__content-btn page__btn">
                                        Подробнее
                                    </button>
                                    <div class="intro__content-social">
                                        <a class="intro__content-link intro__content-youtube" href="#?">
                                            <svg class="icon" width="22" height="15.9">
                                                <use xlink:href="images/icons/sprite.svg#youtube"></use>
                                            </svg>
                                        </a>
                                        <a class="intro__content-link intro__content-instagram" href="#?">
                                            <svg class="icon" width="19" height="19">
                                                <use xlink:href="images/icons/sprite.svg#instagram"></use>
                                            </svg>
                                        </a>
                                        <a class="intro__content-link intro__content-facebook" href="#?">
                                            <svg class="icon" width="11" height="21">
                                                <use xlink:href="images/icons/sprite.svg#facebook"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="intro__content">
                                <h1 class="intro__content-title">
                                    Благотворительный<span>ФОНД</span>
                                </h1>
                                <p class="intro__content-text page__text">
                                    Благотворительный проект #KustoHelp создан международной компанией Kusto Group и направлен на оказание помощи наиболее пострадавшим и уязвимым группам населения на период чрезвычайного положения, объявленной по причине пандемии коронавируса COVID-19 в
                                    Республике Казахстан
                                </p>
                                <div class="intro__content-bottom">
                                    <button class="intro__content-btn page__btn">
                                        Подробнее
                                    </button>
                                    <div class="intro__content-social">
                                        <a class="intro__content-link intro__content-youtube" href="#?">
                                            <svg class="icon" width="22" height="15.9">
                                                <use xlink:href="images/icons/sprite.svg#youtube"></use>
                                            </svg>
                                        </a>
                                        <a class="intro__content-link intro__content-instagram" href="#?">
                                            <svg class="icon" width="19" height="19">
                                                <use xlink:href="images/icons/sprite.svg#instagram"></use>
                                            </svg>
                                        </a>
                                        <a class="intro__content-link intro__content-facebook" href="#?">
                                            <svg class="icon" width="11" height="21">
                                                <use xlink:href="images/icons/sprite.svg#facebook"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="intro__content">
                                <h1 class="intro__content-title">
                                    Благотворительный<span>ФОНД</span>
                                </h1>
                                <p class="intro__content-text page__text">
                                    Благотворительный проект #KustoHelp создан международной компанией Kusto Group и направлен на оказание помощи наиболее пострадавшим и уязвимым группам населения на период чрезвычайного положения, объявленной по причине пандемии коронавируса COVID-19 в
                                    Республике Казахстан
                                </p>
                                <div class="intro__content-bottom">
                                    <botton class="intro__content-btn page__btn">
                                        Подробнее
                                    </botton>
                                    <div class="intro__content-social">
                                        <a class="intro__content-link intro__content-youtube" href="#?">
                                            <svg class="icon" width="22" height="15.9">
                                                <use xlink:href="images/icons/sprite.svg#youtube"></use>
                                            </svg>
                                        </a>
                                        <a class="intro__content-link intro__content-instagram" href="#?">
                                            <svg class="icon" width="19" height="19">
                                                <use xlink:href="images/icons/sprite.svg#instagram"></use>
                                            </svg>
                                        </a>
                                        <a class="intro__content-link intro__content-facebook" href="#?">
                                            <svg class="icon" width="11" height="21">
                                                <use xlink:href="images/icons/sprite.svg#facebook"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about" style="background-image: url({{asset('images/bg/about-bg.jpg')}})">
                <div class="container">
                    <div class="about__inner" id="about">
                        <img class="about__img" src="{{asset('images/img/about-img.png')}}" alt="">
                        <div class="about__content">
                            <h3 class="about__title page__title">
                                О нашем фонде
                            </h3>
                            <p class="about__text page__text">
                                Группа работает в 10 странах мира: Канаде, Китае, Грузии, Израиле, Казахстане, России, Сингапуре, Турции, Вьетнаме, Украине в таких секторах как девелопмент, строительные материалы, нефтедобыча, развитие сети АЗС нового формата “Compass”, сельское хозяйство.
                                Всего в группе более 30 компаний, где задействовано около 8000 сотрудников.
                            </p>
                            <div class="about__item">
                                <img class="about__item-img" src="{{asset('images/icons/about-item-1.svg')}}" alt="">
                                <div class="about__item-content">
                                    <h5 class="about__item-title">
                                        Поддержка многодетных семей, малоимущих
                                    </h5>
                                    <p class="about__item-text page__text">
                                        Посредством поставки продуктовых наборов и адресной материальной помощи в сотрудничестве с волонтерскими организациями и региональными государственными органами Республики Казахстан
                                    </p>
                                </div>
                            </div>
                            <div class="about__item">
                                <img class="about__item-img" src="{{asset('images/icons/about-item-2.svg')}}" alt="">
                                <div class="about__item-content">
                                    <h5 class="about__item-title">
                                        Предоставление помощи медикам
                                    </h5>
                                    <p class="about__item-text page__text">
                                        Необходимыми средствами для борьбы с инфекцией и обеспечения условий их работы
                                    </p>
                                </div>
                            </div>
                            <div class="about__item">
                                <img class="about__item-img" src="{{asset('images/icons/about-item-3.svg')}}" alt="">
                                <div class="about__item-content">
                                    <h5 class="about__item-title">
                                        Сотрудничество с благотворительными фондами
                                    </h5>
                                    <p class="about__item-text page__text">
                                        Посредством поставки продуктовых наборов и адресной материальной помощи в сотрудничестве с волонтерскими организациями и региональными государственными органами Республики Казахстан
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="news" style="background-image: url({{asset('images/bg/news-bg.jpg')}})">
                <div class="container">
                    <h3 class="news__title page__title">
                        Новости фонда
                    </h3>
                    <div class="news__inner">
                        @yield('news-content')
                    </div>
                </div>
            </section>

            <section class="projects" style="background-image: url(images/bg/projects-bg.jpg)">
                <div class="container">
                    <h3 class="projects__title page__title">
                        НАШИ ПРОЕКТЫ
                    </h3>
                    <div class="projects__slider" id="projects">
                        @yield('projects-content')
                        
                    </div>
                    <ul class="slick-dots">
                        <button class="arrow arrow-next">
                            <img src="images/icons/slider-arrow.svg" alt="">
                        </button>
                        <button class="arrow arrow-prev">
                            <img src="images/icons/slider-arrow.svg" alt="">
                        </button>
                    </ul>
                </div>
            </section>

            <section class="reports">
                <div class="container">
                    <h3 class="reports__title page__title" id="reports">
                        Годовые отчеты
                    </h3>
                    <div class="reports__inner">
                        <div class="reports__item">
                            <div class="reports__item-title">
                                Годовой отчет ЧФ "KUSTO.HELP" за 2020 год.
                            </div>
                            <a class="reports__item-download" href="images/bg/intro-bg.jpg" download="">
                                Скачать
                            </a>
                        </div>
                        <div class="reports__item">
                            <div class="reports__item-title">
                                Отчет №2 за период с 26 апреля по 31 Мая 2020
                            </div>
                            <a class="reports__item-download" href="images/bg/intro-bg.jpg" download="">
                                Скачать
                            </a>
                        </div>
                        <div class="reports__item">
                            <div class="reports__item-title">
                                Отчет № 1 от 25.05.2020 - 29.05.2020
                            </div>
                            <a class="reports__item-download" href="images/bg/intro-bg.jpg" download="">
                                Скачать
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="foundation">
                <div class="container">
                    <div class="foundation__inner">
                        <img class="foundation__img" src="images/img/foundation-img.png" alt="">
                        <div class="foundation__content">
                            <h3 class="foundation__title">
                                Обратиться в фонд
                            </h3>
                            <p class="foundation__text">
                                Задайте их нашему специалисту и получите ответ в течение 15 минут!
                            </p>
                            <form class="foundation__form" method="POST">
                                @csrf
                                <input class="foundation__form-name input-words" type="text" name="name" placeholder="Вашe имя">
                                <input class="foundation__form-phone input-phone" type="phone" name="phone" placeholder="Ваш телефон">
                                <input class="foundation__form-btn page__btn" type="submit" value="Задать вопрос">
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__social">
                        <a class="footer__logo" href="#?">
                            <img class="footer__logo-img" src="images/footer-logo.png" alt="">
                        </a>
                        <div class="footer__social-icons">
                            <a class="footer__social-link footer__social-youtube" href="#?">
                                <svg class="icon" width="22" height="15.9">
                                    <use xlink:href="images/icons/sprite.svg#youtube"></use>
                                </svg>
                            </a>
                            <a class="footer__social-link footer__social-instagram" href="#?">
                                <svg class="icon" width="19" height="19">
                                    <use xlink:href="images/icons/sprite.svg#instagram"></use>
                                </svg>
                            </a>
                            <a class="footer__social-link footer__social-facebook" href="#?">
                                <svg class="icon" width="11" height="21">
                                    <use xlink:href="images/icons/sprite.svg#facebook"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="footer__social-contact">
                            <a class="footer__social-whatsaap" href="#?">
                                Написать нам
                            </a>
                            <a class="footer__social-email" href="#?">
                                Kustohelp@gmail.com
                            </a>
                        </div>
                    </div>
                    <div class="footer__about">
                        <h5 class="footer__title">
                            О нас
                        </h5>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    О Фонде
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Команда фонда
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Попечительский совет
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Проекты
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Новости Фонда
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__partners">
                        <h5 class="footer__title">
                            Партнерам
                        </h5>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Свои новости
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Пресса о нас
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Отчеты
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Годовые отчеты
                                </a>
                            </li>
                            <li class="footer__list-item">
                                <a class="footer__list-link" href="#?">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__contacts">
                        <h5 class="footer__title" id="contacts">
                            Контакты
                        </h5>
                        <div class="footer__contacts-item footer__contacts-address">
                            <h6 class="footer__contacts-title">
                                Адрес
                            </h6>
                            <p class="footer__contacts-text">
                                Алматы, ул. Набережная 1
                            </p>
                        </div>
                        <div class="footer__contacts-item footer__contacts-phone">
                            <h6 class="footer__contacts-title">
                                Телефон
                            </h6>
                            <p class="footer__contacts-text">
                                8 800 808-00-80
                            </p>
                        </div>
                        <div class="footer__contacts-item footer__contacts-mode">
                            <h6 class="footer__contacts-title">
                                Режим работы

                            </h6>
                            <p class="footer__contacts-text">
                                Пн - Пт / 8:30 - 19:00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- svg -->

        <svg>
            <symbol id="whatsaap-slide">

            </symbol>
        </svg>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
