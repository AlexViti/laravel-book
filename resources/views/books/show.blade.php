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

    <h2>{{ $book->title }}</h2>
    <h5>{{ $book->author }}</h5>
    <p>{{ $book->year }}</p>

</body>
</html>
