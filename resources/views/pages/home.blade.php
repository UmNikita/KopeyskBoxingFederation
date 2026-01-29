@extends('main')

@section('content')
<div>
    <div class="el main-banner">
        <div class="main-banner-leftpart">
            <div class="main-banner-leftpart__titles">
                <p>Федерация бокса</p>
                <p class="main-banner-leftpart__titles-under">Копейска</p>
            </div>
            <div class="main-button main-banner-leftpart__btn">
                <button>Подробно</button>
            </div>
        </div>
        <div class="main-banner-rightpart"></div>
    </div>
    <div class="el main-pastulats">
        <div class="main-titles">
            <p class="main-titles__h">Наши цели</p>
            <p class="main-titles__sbt">Три постулата, ради которых мы трудимся</p>
        </div>
        <div class="main-pastulats-container">
            <div class="main-pastulats__el">
                <div class="main-pastulats__el-ico"></div>
                <p class="main-pastulats__el-title">Здоровье</p>
                <p class="main-pastulats__el-subtitle">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="main-pastulats__el">
                <div class="main-pastulats__el-ico"></div>
                <p class="main-pastulats__el-title">Уверенность</p>
                <p class="main-pastulats__el-subtitle">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="main-pastulats__el">
                <div class="main-pastulats__el-ico"></div>
                <p class="main-pastulats__el-title">Дисциплина</p>
                <p class="main-pastulats__el-subtitle">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>
    </div>
    <div class="el main-form">
        <div class="main-titles">
            <p class="main-titles__h">Остались вопросы?</p>
            <p class="main-titles__sbt">Заполните форму и мы ответим вам в ближайшее время</p>
        </div>
        <div class="main-form-container">
            <div class="main-form-fields">
                <label class="main-form-lbl">
                    <p>Имя</p>
                    <input id="main-form-name">
                </label>
                <label class="main-form-lbl">
                    <p>Почта</p>
                    <input id="main-form-mail">
                </label>
                <label class="main-form-lbl-question main-form-lbl">
                    <p>Вопрос</p>
                    <textarea id="main-form-question"></textarea>
                </label>
                <p></p>
                <div class="main-button">
                    <button>Отправить</button>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection