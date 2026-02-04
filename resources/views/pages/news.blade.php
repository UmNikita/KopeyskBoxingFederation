@extends('main')

@section('content')
<div class="el main-news">
    <h1 class="main-about__title">Новости</h1>
    @if($news->isEmpty())
        <p class="main-not__title">Нет данных</p> 
    @else
    <div class="main-news-container">
        @foreach($news as $new)
        <div class="main-news-el">
            <h1>{{$new->name}}</h1>
            <p>{{$new->date_publication}}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection