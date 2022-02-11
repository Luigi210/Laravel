<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('/images/fovicon.svg')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>

    <div class="body">


        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="{{url('/')}}">
                        <img src="images/logo-header.svg" alt="">
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
                                    <a class="header__list-link" href="{{url('projects.html')}}">
                                        Наши проекты
                                    </a>
                                </li>
                                <li class="header__list-item">
                                    <a class="header__list-link" href="{{url('reports.html')}}">
                                        Отчёты
                                    </a>
                                </li>
                                <li class="header__list-item">
                                    <a class="header__list-link" href="contacts.html">
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

        <main class="main" style="background-image: url({{url('images/bg/page-bg.jpg')}})">

            <section class="news__page">
                <div class="container">
                    <h3 class="news__page-title page__title">
                        Новостная страница
                    </h3>
                    <img class="news__page-img" src="images/img/news-image.jpg" alt="">
                    <p class="news__page-date">
                        21 сентября 2021
                    </p>
                    <p class="news__page-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id tincidunt leo tincidunt ipsum amet gravida ac, semper egestas. Sagittis sodales in sed amet, sapien vestibulum viverra vestibulum et. A non nibh pellentesque quam commodo, sed vel placerat. Lacus enim tellus eu elit quisque facilisis ut. Ullamcorper cursus nascetur non eu leo vitae. Suspendisse porttitor elit morbi tincidunt pellentesque erat. Amet venenatis vel iaculis purus scelerisque tempus dignissim. Purus eu praesent magna etiam. Volutpat aliquam ut nibh pharetra non malesuada. Eu feugiat adipiscing placerat in fames arcu maecenas ullamcorper. Et aliquam scelerisque tincidunt nibh id. Iaculis senectus sit mauris eleifend. Aliquam ut consectetur volutpat ultricies etiam mauris cras sed congue. Massa nunc urna pharetra, egestas lobortis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id tincidunt leo tincidunt ipsum amet gravida ac, semper egestas. Sagittis sodales in sed amet, sapien vestibulum viverra vestibulum et. A non nibh pellentesque quam commodo, sed vel placerat. Lacus enim tellus eu elit quisque facilisis ut. Ullamcorper cursus nascetur non eu leo vitae.
                    </p>
                    <p class="news__page-text">
                        Suspendisse porttitor elit morbi tincidunt pellentesque erat. Amet venenatis vel iaculis purus scelerisque tempus dignissim. Purus eu praesent magna etiam. Volutpat aliquam ut nibh pharetra non malesuada. Eu feugiat adipiscing placerat in fames arcu maecenas ullamcorper. Et aliquam scelerisque tincidunt nibh id. Iaculis senectus sit mauris eleifend. Aliquam ut consectetur volutpat ultricies etiam mauris cras sed congue. Massa nunc urna pharetra, egestas lobortis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id tincidunt leo tincidunt ipsum amet gravida ac, semper egestas. Sagittis sodales in sed amet, sapien vestibulum viverra vestibulum et. A non nibh pellentesque quam commodo, sed vel placerat. Lacus enim tellus eu elit quisque facilisis ut. Ullamcorper cursus nascetur non eu leo vitae. Suspendisse porttitor elit morbi tincidunt pellentesque erat. Amet venenatis vel iaculis purus scelerisque tempus dignissim. Purus eu praesent magna etiam. Volutpat aliquam ut nibh pharetra non malesuada. Eu feugiat adipiscing placerat in fames arcu maecenas ullamcorper. Et aliquam scelerisque tincidunt nibh id. Iaculis senectus sit mauris eleifend. Aliquam ut consectetur volutpat ultricies etiam mauris cras sed congue. Massa nunc urna pharetra, egestas lobortis.
                    </p>
                </div>
            </section>

            <section class="foundation">
                <div class="container">
                    <div class="foundation__inner">
                        <img class="foundation__img" src="{{url('/images/img/foundation-img.png')}}" alt="">
                        <div class="foundation__content">
                            <h3 class="foundation__title">
                                Обратиться в фонд
                            </h3>
                            <p class="foundation__text">
                                Задайте их нашему специалисту и получите ответ в течение 15 минут!
                            </p>
                            <form class="foundation__form">
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
                            <img class="footer__logo-img" src="{{asset('/images/footer-logo.png')}}" alt="">
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

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
