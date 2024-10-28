<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Предложения</h1>
    <a href ="/">Назад</a> 
    @foreach($po as $post)
        <div>
            <h1>Запись #{{ $post->id }}</h1>
            <h2>Тип записи: {{ $post->type }}</h2>
            <h2>{{ $post->txt }}</h2>
            <h3>{{ $post->status ? '' : 'Полезна' }}</h3>
            <p>Дата создания: {{ $post->created_at }}</p>
            <button href="{ {change.status} }">Полезно</button>
        </div>
    @endforeach
</body>
</html>