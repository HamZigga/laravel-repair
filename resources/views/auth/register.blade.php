@extends ('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" value="Name">

                <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') ?? null }}"
                    placeholder="Введите ФИО" required autofocus>
        </div>

        <!-- login -->
        <div>
            <label for="login" value="login">

                <input id="login" class="block mt-1 w-full" type="text" name="login" value="{{ old('login') ?? null }}"
                    placeholder="Введите логин" required>
        </div>

        <!-- phone -->
        <div>
            <label for="phone" value="phone">

                <input id="phone" class="block mt-1 w-full" type="number" name="phone" value="{{ old('phone') ?? null }}"
                    placeholder="Введите номер телефона" required>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" value="Email">

                <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') ?? null }}"
                    placeholder="Введите email" required>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" value="Password">

                <input id="password" class="block mt-1 w-full" type="password" name="password" required
                    placeholder="Введите пароль" autocomplete="new-password">
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" value="Confirm Password">

                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                    placeholder="Повторите пароль" required>
        </div>

        <input name="personal_data" id="" type="checkbox" required>
        <label for="personal_data">Согласие на обработку персональных данных</label>

        <div class="flex items-center justify-end mt-4">
            <button class="ml-4">Регистрация</button>
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">Уже зарегистрированы?</a>
            
        </div>
    </form>
@endsection
