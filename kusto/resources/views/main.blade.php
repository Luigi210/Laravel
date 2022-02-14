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
                    {{-- <a class="intro__content-link intro__content-instagram" href="#?">
                        <svg class="icon" width="19" height="19">
                            <use xlink:href="images/icons/sprite.svg#instagram"></use>
                        </svg>
                    </a>
                    <a class="intro__content-link intro__content-facebook" href="#?">
                        <svg class="icon" width="11" height="21">
                            <use xlink:href="images/icons/sprite.svg#facebook"></use>
                        </svg>
                    </a> --}}
                </div>
            </div>
        </div>
    @endforeach
@endsection





