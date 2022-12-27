<header>
    <div class="container">
        <div class="h-wrapper">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC_LOGO" />
            </div>
            <div class="nav-menu">
                <ul>
                    @foreach (config('db.main_menu') as $link)
                        <li><a href="{{ route($link['route']) }}"> {{ $link['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
