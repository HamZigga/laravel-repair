@extends ('layouts.app')

@section('title', 'Создание заявки')

@section('content')
    <div class="container">
    <div class="block-title">
            <h3 class="block-title__text">Редактировать заявку</h3>
        </div>
    <form class="form" action="{{ route('statement.update', $statement->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form__item">
            <label class="form__item-label" for="address">Адрес помещения</label>
            <input id="address" name="address" type="text" class="form__item-input" placeholder="Введите адрес помещения" value="{{ $statement->address ?? old('address') ?? '' }}">
        </div>
        <div class="form__item">
            <label class="form__item-label" for="category">Категория</label>
            <select class="form__item-select" name="category[]" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form__item">
            <label class="form__item-label" for="description">Описание</label>
            <textarea id="description" name="description" type="text" class="form__item-textarea"
                placeholder="Введите описание" rows="5" >{{ $statement->description ?? old('description') ?? '' }}</textarea>
        </div>
        <div class="form__item">
            <label class="form__item-label" for="price">Максимальная цена</label>
            <input id="price" name="price" type="text" class="form__item-input"
                placeholder="Введите максимальную цену ремонта" value="{{ $statement->price ?? old('price') ?? '' }}">
        </div>
        <div class="form__item">
            <img style="object-fit: cover; width: 400px; height: 300px" src="{{ $statement->description ?? old('description') ?? '' }}" alt="photo">
            <label class="form__item-label" for="photo_place">Фото помещения</label>
            <input id="photo_place" name="photo_place" type="file" class="form__item-file" value="Загрузить фото">
        </div>
        <div class="form__item">
            <label class="form__item-label" for="photo_blueprint">План помещения</label>
            <img style="object-fit: cover; width: 400px; height: 300px" src="{{ $statement->description ?? old('description') ?? '' }}" alt="blueprint">
            <input id="photo_blueprint" name="photo_blueprint" type="file" class="form__item-file" value="Загрузить фото">
        </div>
        <div class="form__item">
            <button class="form__item-button" type="submit">Отправить</button>
        </div>
    </form>
    </div>
@endsection