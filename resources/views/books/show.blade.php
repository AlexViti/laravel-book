<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $book->title }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <a href="{{ route('home') }}">Torna indietro &#8630;</a>
    <div class="container">
        <div class="card">
            <h2>{{ $book->title }}</h2>
            <h5>{{ $book->author }}</h5>
            <p>{{ $book->year }}</p>
        </div>
    </div>
</body>
</html>
