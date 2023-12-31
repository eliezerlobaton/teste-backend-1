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
                    if ($article['author'] !== null) {
                    $news = new News();
                    $news->title = $article['title'];
                    $news->source = $article['source']['name'];
                    $news->content = $article['content'];
                    $news->image = $article['urlToImage'];
                    $news->author = $article['author'];
                    $news->published_at = $article['publishedAt'];
                    $news->url = $article['url'];
                    $news->description = $article['description'];
                    $news->save();
                    }
                }
            }
            
            return response()->json(['message' => 'Data carregada com sucesso!']);
        }

        return response()->json(['error' => 'Erro na requisição da API'], 500);
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