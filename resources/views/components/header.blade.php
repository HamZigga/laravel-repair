<header class="header">
    <a class="header__left" href="{{ route('main') }}">

        <img class="logo__img" src="{{ asset('storage/images/baseimg/templogo.png') }}" alt="logo">
        <div class="logo__text">
            <p class="logo__text-title">Reparacion</p>
            <p class="logo__text-subtitle">Качество — в деталях</p>
        </div>
    </a>

    <nav class="header__nav">
        <li class="nav__item">
            <a href="{{ route('main') }}" class="nav__item-link">Главная</a>
        </li>
        <li class="nav__item">
            <a href="{{ route('statement.create') }}" class="nav__item-link">Создать заявку</a>
        </li>
        <li class="nav__item">
            <a href="#aboutus" class="nav__item-link">О нас</a>
        </li>
    </nav>
    <div class="header__right">
        @auth
            <div class="header__right-element"><a href="{{ route('personal.area') }}">{{ Auth::user()->name }}</a></div>
            <form class="header__right-element" method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">Выход</a>
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="header__right-element">Вход</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="header__right-element">Регистрация</a>
            @endif
        @endguest
    </div>
</header>
