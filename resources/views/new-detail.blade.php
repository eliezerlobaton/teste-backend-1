<x-layout>

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
        <a href="\" class="text-blue-500 hover:underline ml-4">Inicio</a>
</x-layout>
