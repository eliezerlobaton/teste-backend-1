<x-layout>
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
</x-layout>
