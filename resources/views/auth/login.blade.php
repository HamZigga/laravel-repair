@extends ('layouts.app')

@section('title', 'Регистрация')

@section('content')
        <!-- Session Status -->
        <auth-session-status class="mb-4" :status="session('status')">

        <!-- Validation Errors -->
        <auth-validation-errors class="mb-4" :errors="$errors">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" value="('Email')">

                <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') ?? null }}" placeholder="Введите Email" required autofocus>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" value="('Password')">
                <input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Введите пароль" required autocomplete="current-password">
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-3">Авторизоваться</button>
            </div>
        </form>
@endsection