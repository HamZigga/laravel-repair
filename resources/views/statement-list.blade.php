@extends ('layouts.app')

@section('title', 'Мои заявки')

@section('content')
    <div class="container">
        <div class="block-title">
            <h3 class="block-title__text">Мои заявки</h3>
        </div>
        @foreach ($statements as $statement)
            @include('components.statement-item')
        @endforeach
    </div>
@endsection
