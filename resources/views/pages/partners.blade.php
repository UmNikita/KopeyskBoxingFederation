@extends('main')

@section('content')
<div class="el main-partners">
    <h1 class="main-about__title">Наши партнеры</h1>
    @if($partners->isEmpty())
        <p class="main-not__title">Нет данных</p>
    @else
    <div class="main-partners-container">
        @foreach($partners as $partner)
        <a href="{{$partner->url}}" target="_blank" class="main-partners-el"></a>
        @endforeach
    </div>
    @endif
</div>
@endsection