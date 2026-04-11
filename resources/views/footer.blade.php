<footer>
    <div class="footer-logo">
        <div class="footer-logo-img"></div>
        <p>{{config('contacts.contacts.address')}}</p>
        <p>Телефон: {{config('contacts.contacts.phone')}}</p>
        <p>© 2026, Все права защищены</p>
    </div>
    <div class="footer-menu">
        <ul>
            @foreach(config('menu') as $el)
                <li><a href="{{$el['route']}}">{{$el['title']}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="footer-end">
        <div class="footer-sites">
            @foreach(config('socnets.nets') as $net)
                @if($net['active'])
                    @php
                        $url = $net['url'];
                        $ico = $net['ico'];
                    @endphp
                    <a href="{{$url}}" style="background-image: url('{{$ico}}')"></a>
                @endif
            @endforeach
        </div>
        <div class="main-button">
            <a href="/#form">Связаться с нами</a>
        </div>
    </div>
</footer>