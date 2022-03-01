<div class="statement__item">
    <p class="statement__item-date"></p>
    <h4 class="statement__item-title">{{ $statement->address }}</h4>
    <p class="statement__item-text">{{ $statement->description }}</p>
    <p>Категория:</p>
    <p class="statement__item-text">{{ $statement->category->name }}</p>
    <p class="statement__item-text">{{ $statement->price }}</p>
    <p class="statement__item-image">{{ $statement->photo_place }}</p>
    <p class="statement__item-image">{{ $statement->photo_blueprint }}</p>
</div>