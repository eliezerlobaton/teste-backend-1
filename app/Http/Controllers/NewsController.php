<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function importNewsData()
    {
        $apiKey = 'd554dc986ea04fb1906ad8eab03e50ca';
        $url = "https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=$apiKey";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['articles'])) {
                foreach ($data['articles'] as $article) {
                    $news = new News();
                    $news->title = $article['title'] ?? 'No content available';
                    $news->source = $article['source']['name'] ?? 'No content available';
                    $news->content = $article['content'] ?? 'No content available';
                    $news->image = $article['urlToImage'] ?? 'No content available';
                    $news->author = $article['author'] ?? 'No content available';
                    $news->published_at = $article['publishedAt'] ?? 'No content available';
                    $news->url = $article['url'] ?? 'No content available';
                    $news->description = $article['description'] ?? 'No content available';
                    $news->save();
                }
            }

            return response()->json(['message' => 'Carga exitosa']);
        }

        return response()->json(['error' => 'Error en la solicitud API'], 500);
    }

    public function index()
    {
        $news = News::all();
        return view('welcome', compact('news'));
    }

    public function showIndex()
    {
        $news = News::all();
        return response()->json($news);
    }

    public function show($id)
    {
        $news = News::find($id);
        return view('new-detail', compact('news'));
    }
}