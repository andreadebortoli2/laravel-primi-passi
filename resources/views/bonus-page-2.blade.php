<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonus-page</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <a href="{{$homeUrl}}">
                    Home
                </a>
            </li>
            @foreach ($ns=[1,2] as $n)
            @if($n != $id)
            <li>
                <a href="{{route('bonus-page', ['id' => $n])}}">
                    Bonus-page {{$n}}
                </a>
            </li>
            @else
            <li>
                Bonus-page {{$n}}
            </li>
            @endif
            @endforeach
        </ul>
    </header>

    <main>
        <h2>
            @php
            echo strtoupper($title);
            @endphp
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus in officiis a doloribus deserunt accusamus laboriosam reprehenderit molestiae! Unde temporibus omnis nobis dolor dolorum tempora esse debitis repudiandae eveniet iste.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus in officiis a doloribus deserunt accusamus laboriosam reprehenderit molestiae! Unde temporibus omnis nobis dolor dolorum tempora esse debitis repudiandae eveniet iste.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus in officiis a doloribus deserunt accusamus laboriosam reprehenderit molestiae! Unde temporibus omnis nobis dolor dolorum tempora esse debitis repudiandae eveniet iste.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus in officiis a doloribus deserunt accusamus laboriosam reprehenderit molestiae! Unde temporibus omnis nobis dolor dolorum tempora esse debitis repudiandae eveniet iste.
        </p>
    </main>
</body>

</html>