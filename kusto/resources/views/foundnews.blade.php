@extends('welcome')

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
