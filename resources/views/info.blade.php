<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$animals->name}}</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <div class="animal">
            <a href="{{ route('home') }}">На главную</a>
            <h3>{{$animals->spiece}}</h3>
            <h3>Имя: {{$animals->name}}</h3>
            <h4>Возраст: {{$animals->age}}</h4>
            <h4>{{$animals->description}}</h6>
            <form action="{{ route('delete') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $animals->id }}" name="id">
                <button>Удалить</button>
            </form>
        </div>
    </div>
</body>
</html>