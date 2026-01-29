<header>
    <div class="header-logo-container">
        <div class="header-logo-container-logo"></div>
    </div>
    <div class="header-menu-container">
        <nav>
            <ul>
                @foreach(config('menu') as $el)
                    <li><a href="{{$el['route']}}">{{$el['title']}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>