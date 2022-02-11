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
