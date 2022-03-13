<h4 class="statement__item-title">Адрес: {{ $statement->address }}</h4>
<div class="statement__item">
    <p class="statement__item-date">{{ $statement->updated_at }} Номер заявки: {{ $statement->id }}</p>
    <p class="statement__item-text">Цена: <span>{{ $statement->price }}</span></p>
    <p>Категория:</p>
    <p class="statement__item-text"><span>{{ $statement->category->name }}</span></p>
    <p class="statement__item-text">Описание: <span>@isset($statement->description) {{ $statement->description }} @endisset</span></p>
    <p class="statement__item-text">Фото помещения: </p>
    <img src="@isset($statement->photo_place){{ asset('storage/'.$statement->photo_place) }}@endisset" alt="place" class="statement__item-image">
    <p class="statement__item-text">Фото плана помещения:</p>
    <img src="@isset($statement->photo_blueprint){{ asset('storage/'.$statement->photo_blueprint) }}@endisset" alt="blueprint" class="statement__item-image">

    <a href="{{ route('statement.edit', $statement->id) }}" class="personal__link">Редактировать заявку</a>
    <a href="{{ route('statement.destroy', $statement->id) }}" class="personal__link">Удалить заявку</a>
</div>