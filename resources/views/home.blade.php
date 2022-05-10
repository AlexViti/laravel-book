<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
</head>
<body>
    <div class="card">
        @foreach ($books as $book)
            <h1>{{ $book->title }}</h1>
            <h2>{{ $book->author }}</h2>
        @endforeach
    </div>
</body>
</html>
