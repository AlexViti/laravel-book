<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>

    <link rel="stylesheet" href="{{ assets('css/app.css') }}">
</head>
<body>
    <div class="container">
        @foreach ($books as $book)
            <div class="card">
                <h2>{{ $book->title }}</h2>
                <strong>{{ $book->author }}</strong>
                <div>{{ date('d/m/Y', $book->year) }}</div>
            </div>
        @endforeach
    </div>
</body>
</html>
