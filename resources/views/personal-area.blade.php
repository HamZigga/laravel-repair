@extends ('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="container container-pesonalarea">
        <div class="block-title">
            <h3 class="block-title__text">Личный кабинет</h3>
        </div>

        <p class="personal__label">Ваше ФИО:</p>
        <p class="personal__text">{{ auth()->user()->name }}</p>
        <p class="personal__label">Ваш логин:</p>
        <p class="personal__text">{{ auth()->user()->login }}</p>
        <p class="personal__label">Ваш номер телефона:</p>
        <p class="personal__text">{{ auth()->user()->phone }}</p>
        <p class="personal__label">Ваш Email:</p>
        <p class="personal__text">{{ auth()->user()->email }}</p>
        <a class="personal__link" href="{{ route('statement')}}">Мои заявки</a>
    </div>
@endsection
