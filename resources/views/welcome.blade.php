<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')

</head>

<body class="antialiased">
    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->description }}</p>
                <a href="{{ $article->url }}" target="_blank">Leer más</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
