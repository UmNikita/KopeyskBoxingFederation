@extends('main')

@section('content')
<div class="el main-about">
    <h1 class="main-about__title">О нас</h1>
    <p class="main-about__txt">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
    @if(!$staff->isEmpty())
    {{--Двойной цикл - это временный костыль, потом надо убрать--}}
    <h1 class="main-about__staff-title">Наши сотрудники</h1>
    <div class="main-about__staff-container">
        @foreach($staff as $el)
        <div class="main-about__staff-el">
            <div class="main-about__staff-el-img"></div>
            <div class="main-about__staff-el-name">{{$el->secondname}} {{$el->name}}</div>
            <div class="main-about__staff-el-pos">position</div>
        </div>
        @endforeach
    </div>
    <h1 class="main-about__staff-title">Контакты</h1>
    <div class="main-about__contacts-container">
        @foreach($staff as $el)
        <div class="main-about__contacts-el">
            <p class="main-about__contacts-el-name">Lorem ipsum</p>
            <p class="main-about__contacts-el-inf"><span>Телефон:</span> {{$el->phone}}</p>
            <p class="main-about__contacts-el-inf"><span>Почта:</span> {{$el->mail}}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection