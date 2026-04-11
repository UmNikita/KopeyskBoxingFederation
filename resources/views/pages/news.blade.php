@extends('main')

@section('content')
<div class="el main-news">
    <h1 class="main-about__title">Новости</h1>
    @if($news->isEmpty())
        <p class="main-not__title">Нет данных</p> 
    @else
    <div class="main-news-container">
        @foreach($news as $new)
        <a href="/new/{{$new->id}}" class="main-news-el" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/storage/{{$new->img_root}}')">
            <h1>{{$new->name}}</h1>
            <p>{{$new->created_at}}</p>
        </a>
        @endforeach
    </div>
    @endif
</div>
@endsection