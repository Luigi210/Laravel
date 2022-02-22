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


        <main class="main" style="background-image: url({{url('images/bg/page-bg.jpg')}})">
                
                @foreach($project as $proj)
                    <section class="news__page">
                        <div class="container">
                            <h3 class="news__page-title page__title">
                                {{$proj['title']}}
                            </h3>
                            {{-- <img class="news__page-img" src="{{$projectspage['image']}}" alt=""> --}}
                            <p class="news__page-date">
                                {{$proj['date']}}
                            </p>
                            <p class="news__page-text">
                                {{$proj['description']}}
                            </p> 
                            {{-- {{-- <p class="news__page-text">
                                Suspendisse porttitor elit morbi tincidunt pellentesque erat. Amet venenatis vel iaculis purus scelerisque tempus dignissim. Purus eu praesent magna etiam. Volutpat aliquam ut nibh pharetra non malesuada. Eu feugiat adipiscing placerat in fames arcu maecenas ullamcorper. Et aliquam scelerisque tincidunt nibh id. Iaculis senectus sit mauris eleifend. Aliquam ut consectetur volutpat ultricies etiam mauris cras sed congue. Massa nunc urna pharetra, egestas lobortis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id tincidunt leo tincidunt ipsum amet gravida ac, semper egestas. Sagittis sodales in sed amet, sapien vestibulum viverra vestibulum et. A non nibh pellentesque quam commodo, sed vel placerat. Lacus enim tellus eu elit quisque facilisis ut. Ullamcorper cursus nascetur non eu leo vitae. Suspendisse porttitor elit morbi tincidunt pellentesque erat. Amet venenatis vel iaculis purus scelerisque tempus dignissim. Purus eu praesent magna etiam. Volutpat aliquam ut nibh pharetra non malesuada. Eu feugiat adipiscing placerat in fames arcu maecenas ullamcorper. Et aliquam scelerisque tincidunt nibh id. Iaculis senectus sit mauris eleifend. Aliquam ut consectetur volutpat ultricies etiam mauris cras sed congue. Massa nunc urna pharetra, egestas lobortis.
                            </p> --}}
                        </div>
                    </section>
                @endforeach

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

        <!-- svg -->

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
