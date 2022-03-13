@extends ('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="container">
        <div class="block-title">
            <h3 class="block-title__text">Авторизация</h3>
        </div>
        <!-- Session Status -->
        <auth-session-status class="mb-4" :status="session('status')">

            <!-- Validation Errors -->
            <auth-validation-errors class="mb-4" :errors="$errors">

                <form method="POST" class="form" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form__item">
                        <label class="form__item-label" for="email">Адрес электронной почты</label>
                        <input id="email" class="form__item-input" type="email" name="email"
                            value="{{ old('email') ?? null }}" placeholder="Введите Email" required autofocus>
                    </div>
                    <!-- Password -->
                    <div class="form__item" class="mt-4">
                        <label class="form__item-label" for="password">Пароль</label>
                        <input id="password" class="form__item-input" type="password" name="password"
                            placeholder="Введите пароль" required autocomplete="current-password">
                    </div>

                    <div class="form__item">
                        <button class="form__item-button">Авторизоваться</button>
                    </div>
                </form>
    </div>
@endsection
