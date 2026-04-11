@extends('main')

@section('content')
<div class="el main-coaches">
    <h1 class="main-about__title">Тренерский состав</h1>
    @if($coaches->isEmpty())
        <p class="main-not__title">Нет данных</p>
    @else
    <div class="main-coaches-container">
        @foreach($coaches as $coach)
        <div class="main-coaches-el">
            <div class="main-coaches-el-img" style="background-image: url('/storage/{{$coach->avatar_root}}');"></div>
            <div class="main-coaches-el-coachInfo">
                <b class="main-coaches-el-name">{{$coach->name}} {{$coach->secondname}} {{$coach->thirstname}}</b>
                <div class="main-coaches-el-meta-container">
                    <div class="main-coaches-el-meta-birth">
                        <p>Дата рождения:</p>
                        <b>{{$coach->birthday}}</b>
                    </div>
                    <div class="main-coaches-el-meta-exp">
                        <p>Стаж:</p>
                        <b>{{$coach->expirience}}</b>
                    </div>
                </div>
                <p class="main-coaches-el-descr">{{$coach->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection