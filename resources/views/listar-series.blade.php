<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Series</title>
</head>
<body>
    <h1>Séries</h1>
    <ul>
        @foreach($series as $series)
            <li>{{ $series }}</li>
        @endforeach
    </ul>
</body>
</html>
