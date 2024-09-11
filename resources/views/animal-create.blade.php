<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить животное</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <a href="{{ route('home') }}">На главную</a>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Вид животного" name="spiece"><br>
            <input type="text" placeholder="Имя" name="name"><br>
            <input type="text" placeholder="Возраст" name="age"><br>
            <input type="text" placeholder="Описание" name="description"><br>
            <button>Добавить</button>
        </form>
    </div>
</body>
</html>