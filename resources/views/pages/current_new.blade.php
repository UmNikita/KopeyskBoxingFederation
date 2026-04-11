@extends('main')

@section('content')
<div class="el main-news">
    <h1 class="main-about__title">{{$new->name}}</h1>
    <div class="main-new-container">
        <div class="main-new-img" style="background-image: url('/storage/{{$new->img_root}}');"></div>
        <div class="main-new-contant">
            <p class="main-new-date">{{$new->created_at}}</p>
            <p class="main-new-txt">{!!$new->content!!}</p>
        </div>
    </div>
</div>
@endsection