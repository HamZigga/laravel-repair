@extends ('layouts.app')

@section('title', 'Главная страница')

@section('content')
<div >Мы выполнили работ: <span id="numberOfstatementCount"></span></div>
<script>
    function show() {
    $.ajax({
        url: "{{route('statement.count')}}/",
    }).done(function(response) {
        var statementCount = response.statementCount;
        $('#numberOfstatementCount').html(response.statementCount);
    });
}

$(document).ready(function() {
    show();
    setInterval('show()', 5000);
});
</script>
@endsection