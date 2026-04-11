@extends('main')

@section('content')
<div class="el main-document">
    <h1 class="main-about__title">Документы</h1>
    @foreach($documents as $key => $values)
        <h1 class="main-about__staff-title">{{$key}}</h1>
        <div class="main-document-container">
            @foreach($values as $document)
            <a class="main-document-el" href="/storage/{{$document['url']}}" target="_blank">
                <div class="main-document-el-p"><p>{{$document['name']}}</p></div>
                <!-- <div class="main-document-el-img"></div> -->
            </a>
            @endforeach
        </div>
    @endforeach
</div>
@endsection