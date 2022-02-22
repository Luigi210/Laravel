<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/fovicon.svg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="body">

        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="{{$header['imageLink']}}">
                        <img src="{{$header['image']}}" alt="">
                    </a>
                    <button class="burger">
                        <span class="burger-line"></span>
                    </button>
                    <div class="header__item-box"></div>
                    <div class="header__item">
                        <div class="header__language">

                            @foreach($languageLinks as $link)
                                <a class="header__language-{{strtolower($link['name'])}}" href="{{$link['link']}}">
                                    {{$link['name']}}
                                </a>
                            @endforeach
                        </div>
                        <nav class="header__nav">
                            <ul class="header__list">
                                @foreach ($headerLinks as $header)
                                
                                    <li class="header__list-item">
                                        <a class="header__list-link" href="{{$header['link']}}">
                                            {{$header['title']}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                        <div class="header__contacts">
                            <p class="header__contacts-phone">
                                {{$contactLinks[0]['description']}}
                            </p>
                            <a class="header__contacts-email" href="{{$contactLinks[1]['link']}}">
                                {{$contactLinks[1]['description']}}

                            </a>
                            <a class="header__contacts-whatsaap" href="{{$contactLinks[2]['link']}}">
                                {{$contactLinks[2]['description']}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="main" style="background-image: url(images/bg/page-bg.jpg)">

            <section class="about page__about">
                <div class="container">
                    <div class="about__inner" id="about">
                        <img class="about__img" src="images/img/about-page-img.png" alt="">
                        <div class="about__content">
                            <h3 class="about__title page__title">
                                {{$about_found['title']}}
                            </h3>
                            <p class="about__text page__text">
                                {{$about_found['description']}}
                            </p>
                            @foreach($found_content as $content)
                                @if($content['found_id'] == $about_found['id'])
                                    <div class="about__item">
                                        <img class="about__item-img" src="{{$content['image']}}" alt="">
                                        <div class="about__item-content">
                                            <h5 class="about__item-title">
                                                {{$content['title']}}
                                            </h5>
                                            <p class="about__item-text page__text">
                                                {{$content['description']}}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="about__sliders">
                        @foreach ($member as $mem)
                                <div class="team">
                                    <h3 class="team__title page__title">
                                        {{$mem['title']}}
                                    </h3>
                                    <div class="team__slider">
                                        @foreach($employees as $employee)
                                            @if($employee['member_id'] == $mem['id'])
                                                <div class="team__item">
                                                    <img class="team__img" src="{{$employee['image']}}" alt="">
                                                    <p class="team__patronymic">
                                                        {{$employee['name']}}
                                                    </p>
                                                    
                                                    <div class="team__social">
                                                        @foreach($linkIcons as $icon)
                                                            @if($icon['employee_id'] == $employee['id'])
                                                                <img src="{{$icon['icon']}}" alt="">
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                        @endforeach
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
                        <a class="footer__logo" href="{{$footer['link']}}">
                            <img class="footer__logo-img" src="{{$footer['image']}}" alt="">
                        </a>
                        <div class="footer__social-icons">
                            @foreach ($footerSocial as $icons)
                                
                                <a class="footer__social-link footer__social-youtube" href="{{$icons['link']}}">
                                    <svg class="icon" width="22" height="15.9">
                                        <use xlink:href="{{$icons['image']}}"></use>
                                    </svg>
                                </a>
                            @endforeach
                        </div>
                        <div class="footer__social-contact">
                            @foreach ($footerContactUs as $contact)
                                <a class="footer__social-whatsaap" style="--backgroundIcon-var:{{$contact['image']}};" href="{{$contact['link']}}">
                                    {{$contact['title']}}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    @foreach($footerAboutPartners as $footerAboutPartner)

                        @if ($footerAboutPartner['id'] == 1)
                            <div class="footer__about">
                                <h5 class="footer__title">
                                    {{$footerAboutPartner['title']}}
                                </h5>
                                <ul class="footer__list">
                                    @foreach($footerAboutPartnersDetails as $footerAboutPartnerDetail)
                                        @if($footerAboutPartnerDetail['about_partners_id'] == $footerAboutPartner['id'])
                                            <li class="footer__list-item">
                                                <a class="footer__list-link" href="{{$footerAboutPartnerDetail['link']}}">
                                                    {{$footerAboutPartnerDetail['title']}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @elseif($footerAboutPartner['id'] == 2)
                            <div class="footer__partners">
                                <h5 class="footer__title">
                                    {{$footerAboutPartner['title']}}
                                </h5>
                                <ul class="footer__list">
                                    @foreach($footerAboutPartnersDetails as $footerAboutPartnerDetail)
                                        @if($footerAboutPartnerDetail['about_partners_id'] == $footerAboutPartner['id'])
                                            <li class="footer__list-item">
                                                <a class="footer__list-link" href="#?">
                                                    {{$footerAboutPartnerDetail['title']}}
                                                    
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endforeach
                    
                    <div class="footer__contacts">
                        <h5 class="footer__title" id="contacts">
                            {{$footerContact['title']}}
                        </h5>
                        @foreach($footerContactDetails as $footerContactDetail)

                            @if($footerContactDetail['contact_id'] == $footerContact['id'])
                            <div class="footer__contacts-item footer__contacts-address">
                                <h6 class="footer__contacts-title">
                                    {{$footerContactDetail['title']}}
                                </h6>
                                <p class="footer__contacts-text">
                                    {{$footerContactDetail['details']}}

                                </p>
                            </div>
                            @endif
                        @endforeach
                        {{-- <div class="footer__contacts-item footer__contacts-phone">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
