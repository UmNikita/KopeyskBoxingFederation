@extends('main')

@php
$a = config('menu.about.route', '/about');
@endphp

@section('content')
<div>
    <div class="el main-banner eld">
        <div class="main-banner-leftpart">
            <div class="main-banner-leftpart__titles">
                <p>Федерация бокса</p>
                <p class="main-banner-leftpart__titles-under">Копейска</p>
            </div>
            <div class="main-button main-banner-leftpart__btn">
                <a href="{{$a}}">Подробно</a>
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
                <div class="main-pastulats__el-ico ico-health"></div>
                <p class="main-pastulats__el-title">Здоровье</p>
                <p class="main-pastulats__el-subtitle">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="main-pastulats__el">
                <div class="main-pastulats__el-ico ico-confidence"></div>
                <p class="main-pastulats__el-title">Уверенность</p>
                <p class="main-pastulats__el-subtitle">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="main-pastulats__el">
                <div class="main-pastulats__el-ico ico-sport"></div>
                <p class="main-pastulats__el-title">Дисциплина</p>
                <p class="main-pastulats__el-subtitle">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
        </div>
    </div>
    <div class="el main-news eld">
        <div class="main-titles">
            <p class="main-titles__h">Последние новости</p>
        </div>
        <div class="main-news-container">
            @foreach($news as $new)
                <a href="/new/{{$new->id}}" class="main-news-el" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/storage/{{$new->img_root}}')">
                    <h1>{{$new->name}}</h1>
                    <p>{{$new->created_at}}</p>
                </a>
            @endforeach
        </div>
    </div>
    <div class="el main-statistic">
        <div class="main-statistic-el">
            <p class="main-statistic-el__number">5</p>
            <p class="main-statistic-el__title">Тренеров</p>
        </div>
        <div class="main-statistic-el">
            <p class="main-statistic-el__number">100</p>
            <p class="main-statistic-el__title">Воспитанников</p>
        </div>
        <div class="main-statistic-el">
            <p class="main-statistic-el__number">100</p>
            <p class="main-statistic-el__title">Побед в соревнованиях</p>
        </div>
    </div>
    <div class="el main-form eld" id="form">
        <div class="main-titles">
            <p class="main-titles__h">Остались вопросы?</p>
            <p class="main-titles__sbt">Заполните форму и мы ответим вам в ближайшее время</p>
        </div>
        <div class="main-form-container">
            <div class="main-form-fields">
                <label class="main-form-lbl">
                    <p>Имя</p>
                    <input id="main-form-name" maxlength="30">
                </label>
                <label class="main-form-lbl">
                    <p>Почта</p>
                    <input id="main-form-mail" maxlength="30">
                    <p id="main-form-mail-warning">Некорректная почта</p>
                </label>
                <label class="main-form-lbl-question main-form-lbl">
                    <p>Вопрос</p>
                    <textarea id="main-form-question" maxlength="150"></textarea>
                </label>
                <div class="main-button">
                    <button id="main-form-btn">Отправить</button>
                    <p id="main-form-warning">Заполните все поля</p>
                </div>
            </div>  
        </div>
    </div>
    <div class="el main-map">
        <div>
            <h1 class="main-titles__h">Мы находимся</h1>
            <div class="main-map-el">
                <p class="main-map-el__title">Адрес</p>
                <p class="main-map-el__subtitle">{{config('contacts.contacts.address')}}</p>
            </div>
            <div class="main-map-el">
                <p class="main-map-el__title">e-mail</p>
                <p class="main-map-el__subtitle">{{config('contacts.contacts.email')}}</p>
            </div>
            <div class="main-map-el">
                <p class="main-map-el__title">Телефон</p>
                <p class="main-map-el__subtitle">{{config('contacts.contacts.phone')}}</p>
            </div>
        </div>
        <iframe src="{{config('contacts.contacts.ya_map')}}" width="500" height="400" frameborder="0"></iframe>
    </div>
</div>
<script>
    const btn = document.querySelector('#main-form-btn');
    const name_lbl = document.querySelector('#main-form-name');
    const mail_lbl = document.querySelector('#main-form-mail');
    const question_lbl = document.querySelector('#main-form-question');
    const warning_txt = document.querySelector('#main-form-warning');
    const warning_mail_txt = document.querySelector('#main-form-mail-warning');

    btn.addEventListener('click', async ()=>{
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9а-яА-Я.-]+\.[a-zA-Zа-яА-Я]{2,}$/;
        const name_value = name_lbl.value
        const mail_value = mail_lbl.value
        const question_value = question_lbl.value
        const isValidMail = regex.test(mail_value);
        
        const isNameEmpty = isEmptyValue(name_lbl);
        const isMailEmpty = isEmptyValue(mail_lbl);
        const isQuestionEmpty = isEmptyValue(question_lbl);
        if(!isValidMail) {
            warning_mail_txt.style.visibility = 'visible';
            mail_lbl.style.border = '1px solid #d11f1f';
        }
        else {
            warning_mail_txt.style.visibility = 'hidden';
            mail_lbl.style.border = '1px solid #ddd';
        }
        if(!isNameEmpty && !isMailEmpty && !isQuestionEmpty) {
            warning_txt.style.visibility = 'hidden';
            setError("", false);
            if(isValidMail) {
                try {
                    const response = await fetch('/api/submit-form', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            name: name_value,
                            email: mail_value,
                            question: question_value
                        })
                    });
                    
                    if (response.ok) {
                        setComplete("Данные успешно отправлены")
                        
                        name_lbl.value = '';
                        mail_lbl.value = '';
                        question_lbl.value = '';
                    } else {
                        setError("Не удалось отправить данные. Попробуйте позже", true);
                    }
                } catch (error) {
                    console.error('Ошибка:', error);
                    setError("Не удалось отправить данные. Попробуйте позже", true);
                }
            }
        }
        else {
            setError("Заполните все поля", true);
        }
    })
    
    function isEmptyValue(field) {
        if(field.value.length == 0) {
            field.style.border = '1px solid #d11f1f';
            return true;
        }
        field.style.border = '1px solid #ddd';
        return false;
    }

    function setError(message, isErr) {
        if(isErr) {
            warning_txt.innerHTML = message;
            warning_txt.style.visibility = 'visible';
        }
        else {
            warning_txt.style.visibility = 'hidden';
        }
    }

    function setComplete(message) {
        warning_txt.innerHTML = message;
        field.style.border = '1px solid #58a05e';
        warning_txt.style.visibility = 'visible';
    }
</script>
@endsection