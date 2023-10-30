<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
            $newsData = [
                [
                    'title' => 'Notícia 1',
                    'author' => 'Autor 1',
                    'description' => 'Esta é a primeira notícia.',
                    'image' => 'url_de_imagen_1.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 1',
                    'published_at' => '2021-01-01 00:00:00',
                    'url' => 'https://www.google.com'
                ],
                [
                    'title' => 'Notícia 2',
                    'author' => 'Autor 2',
                    'description' => 'Esta é a segunda notícia.',
                    'image' => 'url_de_imagen_2.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 2',
                    'published_at' => '2021-01-02 00:00:00',
                    'url' => 'https://www.yahoo.com'
                ],
                [
                    'title' => 'Notícia 3',
                    'author' => 'Autor 3',
                    'description' => 'Esta é a tercera notícia.',
                    'image' => 'url_de_imagen_3.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 3',
                    'published_at' => '2021-01-03 00:00:00',
                    'url' => 'https://www.bing.com'
                ],
                [
                    'title' => 'Notícia 4',
                    'author' => 'Autor 4',
                    'description' => 'Esta é a cuarta notícia.',
                    'image' => 'url_de_imagen_4.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 4',
                    'published_at' => '2021-01-04 00:00:00',
                    'url' => 'https://www.duckduckgo.com'
                ],
                [
                    'title' => 'Notícia 5',
                    'author' => 'Autor 5',
                    'description' => 'Esta é a quinta notícia.',
                    'image' => 'url_de_imagen_5.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 5',
                    'published_at' => '2021-01-05 00:00:00',
                    'url' => 'https://www.wikipedia.org'
                ],
                [
                    'title' => 'Notícia 6',
                    'author' => 'Autor 6',
                    'description' => 'Esta é a sexta notícia.',
                    'image' => 'url_de_imagen_6.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 6',
                    'published_at' => '2021-01-06 00:00:00',
                    'url' => 'https://www.amazon.com'
                ],
                [
                    'title' => 'Notícia 7',
                    'author' => 'Autor 7',
                    'description' => 'Esta é a septima notícia.',
                    'image' => 'url_de_imagen_7.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 7',
                    'published_at' => '2021-01-07 00:00:00',
                    'url' => 'https://www.twitter.com'
                ],
                [
                    'title' => 'Notícia 8',
                    'author' => 'Autor 8',
                    'description' => 'Esta é a octava notícia.',
                    'image' => 'url_de_imagen_8.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 8',
                    'published_at' => '2021-01-08 00:00:00',
                    'url' => 'https://www.instagram.com'
                ],
                [
                    'title' => 'Notícia 9',
                    'author' => 'Autor 9',
                    'description' => 'Esta é a novena notícia.',
                    'image' => 'url_de_imagen_9.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 9',
                    'published_at' => '2021-01-09 00:00:00',
                    'url' => 'https://www.reddit.com'
                ],
                [
                    'title' => 'Notícia 10',
                    'author' => 'Autor 10',
                    'description' => 'Esta é a decima notícia.',
                    'image' => 'url_de_imagen_10.jpg',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl quis tincidunt ultricies, nunc nisl aliquam nunc, quis aliquet nun',
                    'source' => 'Fonte 10',
                    'published_at' => '2021-01-10 00:00:00',
                    'url' => 'https://www.youtube.com'
                ],
            ];

        foreach ($newsData as $data) {
            News::create($data);
        }
    }
}