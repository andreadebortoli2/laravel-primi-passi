<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>

<body>
    <header>
        <ul>
            <li>
                Home
            </li>
            <li>
                <a href="{{route('bonus-page')}}">bonus-page</a>
            </li>
        </ul>
    </header>
    <main>
        <h1>Hello World</h1>
        <p>{{$message}}</p>
    </main>
</body>

</html>