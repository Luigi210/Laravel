@extends('welcome')

@section('projects-content')
    @foreach($projects as $project)
    <div class="projects__item">
        <img class="projects__item-img" src="{{$project['image']}}" alt="">
        <div class="projects__item-content">
            <h6 class="projects__item-title">
                {{$project['title']}}
            </h6>
            <p class="projects__item-text page__text">
                {{$project['description']}}
            </p>
            <div class="projects__item-button">
                <a class="projects__item-link page__btn" href="#?">
                    Пожертвовать
                </a>
            </div>
        </div>
    </div>
    @endforeach
@endsection

@section('news-content')

    @foreach($news as $new)
    <div class="news__item">
        <img class="news__item-img" src="{{$new['image']}}" alt="">
        <h6 class="news__item-title">
            {{$new['title']}}
        </h6>
        <p class="news__item-date">
            {{$new['date']}}
        </p>
        <p class="news__item-text page__text">
            {{$new['description']}}
        </p>
        <a class="news__item-link" href="{{url('/news')}}">
            Подробнее 
        </a>
    </div>
    @endforeach
@endsection


@section('found')
    @foreach($founds as $found)
        <div class="intro__content">
            <h1 class="intro__content-title">
                {{-- Благотворительный<span>ФОНД</span> --}}
                {{$found['title']}}
            </h1>
            <p class="intro__content-text page__text">
                {{$found['description']}}
            </p>
            <div class="intro__content-bottom">
                <button class="intro__content-btn page__btn">
                    Подробнее
                </button>
                <div class="intro__content-social">
                    
                    @foreach ($icons as $icon)
                        @if($found['id'] == $icon['found_id'])
                            <a class="intro__content-link intro__content" href="#?">
                                <svg class="icon" width="22" height="15.9">
                                    <use xlink:href="\{{$icon['icon']}}"></use>
                                </svg>
                            </a>
                        @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
    @endforeach
@endsection


@section('about_found')

    <img class="about__img" src="{{$about_found['image']}}" alt="">
    <div class="about__content">
        <h3 class="about__title page__title">
            {{$about_found['title']}}
        </h3>
        <p class="about__text page__text">
            {{$about_found['description']}}
        </p>

        @foreach ($found_content as $content)
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
        @endforeach
    </div>
@endsection

@section('report')
    <h3 class="reports__title page__title" id="reports">
        Годовые отчеты
    </h3>
    <div class="reports__inner">
        @foreach($reports as $report)
            <div class="reports__item">
                <div class="reports__item-title">
                    {{$report['title']}}
                </div>
                <a class="reports__item-download" href="images/bg/intro-bg.jpg" download="">
                    Скачать
                </a>
            </div>
        @endforeach
    </div>
@endsection



