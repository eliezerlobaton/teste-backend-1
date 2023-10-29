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
    <div class="container mx-auto p-4">
        <div class="bg-white p-4 shadow-lg rounded-lg">
            <h1 class="text-2xl font-bold">{{ $news->title }}</h1>
            <p class="text-gray-600">Autor: {{ $news->author }}</p>
            <img src="{{ $news->image }}" alt="{{ $news->title }}"
                class="w-full h-40 object-cover object-center rounded-lg mt-2">
            <p class="mt-2">{{ $news->description }}</p>
            <p class="mt-2">{!! $news->source !!}</p>
            <a href="{!! $news->url !!}">
                <article class="mt-2">
                    {!! $news->content !!}
                </article>
            </a>
            <p class="mt-2">{!! $news->published_at !!}</p>
        </div>
    </div>
</body>

</html>
