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
        <h1 class="text-2xl font-bold mb-4">Noticias</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($news as $article)
                <a href="{{ route('news.show', $article->id) }}" class="text-blue-500">
                    <div class="bg-white p-4 shadow-lg rounded-lg">
                        <img src="{{ $article->image }}" alt="{{ $article->title }}"
                            class="w-full h-40 object-cover object-center rounded-lg mb-2">
                        <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                        <p class="text-gray-600">Autor: {{ $article->author }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
