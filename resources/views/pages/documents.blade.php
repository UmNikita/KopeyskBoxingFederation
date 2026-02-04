@extends('main')

@section('content')
<div class="el main-document">
    <h1 class="main-about__title">Документы</h1>
    @foreach($documents as $key => $values)
    @foreach($values as $document)
    <h1 class="main-about__staff-title">{{$key}}</h1>
    <div class="main-document-container">
        <div class="main-document-el">
            <div class="main-document-el-p"><p>{{$document}}</p></div>
            <div class="main-document-el-img"></div>
        </div>
    </div>
    @endforeach
    @endforeach
    <h1 class="main-about__staff-title">Сертификаты</h1>
</div>
@endsection