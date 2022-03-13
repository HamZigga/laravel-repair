@extends ('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <div class="fullscreen">
        <div class="fullscreen__item">
            <div class="fullscreen__item-left">
                <p>&</p>
            </div>
            <div class="fullscreen__item-right">
                <p>Дизайн интерьер</p>
            </div>
        </div>
        <div class="fullscreen__item">
            <div class="fullscreen__item-text">Мы выполнили работ: <span class="fullscreen__item-counter" id="numberOfstatementCount"></span></div>
            <a href="{{ route('statement.create') }}" class="fullscreen__item-button">Оставить заявку</a>
        </div>
    </div>
    <div class="container">


        <div class="block-title">
            <h3 class="block-title__text">Почему именно мы?</h3>
        </div>
        <div class="features">
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-4.png') }}" alt="item">
                <p class="features__item-text">Мы используем только экологически чистые материалы</p>
            </div>
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-3.png') }}" alt="item">
                <p class="features__item-text">Мы работаем только с квалифицированными специалистами</p>
            </div>
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-5.png') }}" alt="item">
                <p class="features__item-text">Мы сделаем современный, безопасный и эргономичный дизайн</p>
            </div>
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-2.png') }}" alt="item">
                <p class="features__item-text">Наши материалы прослужат долгие годы</p>
            </div>
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-6.png') }}" alt="item">
                <p class="features__item-text">Мы выполним все работы в назначенный срок</p>
            </div>
            <div class="features__item">
                <img class="features__item-img" src="{{ asset('storage/images/baseimg/feature-img-1.png') }}" alt="item">
                <p class="features__item-text">Мы максимально оптимизируем ваши расходы на ремонт</p>
            </div>
        </div>
    </div>
        <div class="aboutus" name="aboutus">
            <a name="aboutus"></a>
            <div class="block-title">
                <h3 class="block-title__text">О нас</h3>
            </div>
            <div class="aboutus__main">
                <img src="{{ asset('storage/images/baseimg/about.png') }}" alt="people" class="aboutus__main-img">
                <p class="aboutus__main-text">
                    “Reparacion” — это команда профессиональных дизайнеров интерьера, строителей, электриков и монтажников.
                    Мы
                    придумываем и воплощаем в жизнь дизайн по всем современным тендециям, а также проводим качественный
                    ремонт
                    “Под ключ” нашими мастерами. Мы работаем по всей территории России.
                </p>
            </div>
        </div>
    
    <script>
        function show() {
            $.ajax({
                url: "{{ route('statement.count') }}/",
            }).done(function(response) {
                var statementCount = response.statementCount;
                $('#numberOfstatementCount').html(response.statementCount);
            });
        }

        $(document).ready(function() {
            show();
            setInterval('show()', 5000);
        });
    </script>
@endsection
