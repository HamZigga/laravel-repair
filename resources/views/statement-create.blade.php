@extends ('layouts.app')

@section('title', 'Создание заявки')

@section('content')
    <h2 class="page__title">Оставьте нам свою заявку</h2>
    <form class="form" action="{{ route('statement.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form__item">
            <label class="form__item-label" for="address">Адрес помещения</label>
            <input id="address" name="address" type="text" class="form__item-input" placeholder="Введите адрес помещения">
        </div>
        <select class="form__item" name="category[]" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <div class="form__item">
            <label class="form__item-label" for="description">Описание</label>
            <textarea id="description" name="description" type="text" class="form__item-textarea"
                placeholder="Введите описание"></textarea>
        </div>
        <div class="form__item">
            <label class="form__item-label" for="price">Максимальная цена</label>
            <input id="price" name="price" type="text" class="form__item-input"
                placeholder="Введите максимальную цену ремонта">
        </div>
        <div class="form__item">
            <label class="form__item-label" for="price">Фото помещения</label>
            <input id="price" name="price" type="file" class="form__item-file" value="Загрузить фото">
        </div>
        <div class="form__item">
            <label class="form__item-label" for="price">План помещения</label>
            <input id="price" name="price" type="file" class="form__item-file" value="Загрузить фото">
        </div>
        <div class="form__item">
            <button class="form__item-button" type="submit">Отправить</button>
        </div>
    </form>
@endsection
