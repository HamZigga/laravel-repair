@extends ('layouts.app')

@section('title', 'Мои заявки')

@section('content')
    @foreach ($statements as $statement)
        @include('components.statement-item')
    @endforeach
@endsection
