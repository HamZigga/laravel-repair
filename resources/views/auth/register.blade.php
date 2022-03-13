@extends ('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="container">
        <div class="block-title">
            <h3 class="block-title__text">Регистрация</h3>
        </div>
        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form__item">
                <label class="form__item-label" for="name">Фамилия Имя Отчество</label>
                <input id="name" class="form__item-input" type="text" name="name" value="{{ old('name') ?? null }}"
                    placeholder="Введите ФИО" required autofocus>
            </div>

            <!-- login -->
            <div class="form__item">
                <label class="form__item-label" for="login">Логин пользователя</label>
                <input id="login" class="form__item-input" type="text" name="login" value="{{ old('login') ?? null }}"
                    placeholder="Введите логин" required>
            </div>

            <!-- phone -->
            <div class="form__item">
                <label class="form__item-label" for="phone">Номер телефона</label>
                <input id="phone" class="form__item-input" type="number" name="phone" value="{{ old('phone') ?? null }}"
                    placeholder="Введите номер телефона" required>
            </div>

            <!-- Email Address -->
            <div class="form__item">
                <label class="form__item-label" for="email">Адрес электронной почты</label>
                <input id="email" class="form__item-input" type="email" name="email" value="{{ old('email') ?? null }}"
                    placeholder="Введите email" required>
            </div>

            <!-- Password -->
            <div class="form__item">
                <label class="form__item-label" for="password" value="Password">Пароль</label>
                <input id="password" class="form__item-input" type="password" name="password" required
                    placeholder="Введите пароль" autocomplete="new-password">
            </div>

            <!-- Confirm Password -->
            <div class="form__item">
                <label class="form__item-label" for="password_confirmation" value="Confirm Password">Повтор пароля</label>
                <input id="password_confirmation" class="form__item-input" type="password" name="password_confirmation"
                    placeholder="Повторите пароль" required>
            </div>

            <input name="personal_data" id="personal_data" type="checkbox" required>
            <label for="personal_data">Согласие на обработку персональных данных</label>

            <div class="form__item">
                <button class="form__item-button">Регистрация</button>

            </div>
            <a class="form__item-a" href="{{ route('login') }}">Уже зарегистрированы?</a>

        </form>
    </div>
@endsection
