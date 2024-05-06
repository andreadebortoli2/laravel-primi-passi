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
                <a href="{{route('bonus-page', ['id' => 1])}}">bonus-page-1</a>
            </li>
            <li>
                <a href="{{route('bonus-page', ['id' => 2])}}">bonus-page-2</a>
            </li>
        </ul>
    </header>
    <main>
        <h1>Hello World</h1>
        <p>{{$message}}</p>
    </main>
</body>

</html>