<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOO</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>ZOO</h1>
        <a href="/create">Добавить животное</a>
        @foreach ($animals as $animal)
        <div class="animal">
            <h3>{{$animal->spiece}}</h3>
            <h3>Имя: {{$animal->name}}</h3>
            <h4><a href="/{{$animal->id}}">Подробнее</a></h4>
            <form action="{{ route('delete') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $animal->id }}" name="id">
                <button>Удалить</button>
            </form>
        </div>
        @endforeach
    </div>
</body>
</html>