<footer>
    <div class="footer-logo">
        <div class="footer-logo-img"></div>
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
            <a></a>
            <a></a>
        </div>
        <div class="main-button">
            <button>Связаться с нами</button>
        </div>
    </div>
</footer>