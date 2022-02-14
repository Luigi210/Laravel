@extends('welcome')
@extends('projects')
@extends('news')

@section('form-content')
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
@endsection


