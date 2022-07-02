<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yoga Rakasiwi",
        "email" => "yogarakasiwi32@gmail.com",
        "image" => "logo-dark.png"
    ]);
});

Route::get('/blogs', function () {
    $blogs = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Yoga Rakasiwi",
            "blog" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aliquam et deserunt tempora necessitatibus consequuntur iusto quos. Minima beatae nesciunt fuga expedita, voluptatum odio sapiente odit harum aspernatur, sint alias dignissimos culpa iure deserunt veritatis quibusdam magni quo cumque sit dolorum perferendis. Obcaecati quos nulla, fuga commodi repudiandae facilis sunt totam magni, perspiciatis optio tempora illum ea dolores aperiam officiis? Accusamus neque eveniet cupiditate iusto porro sapiente architecto unde molestiae cumque repellat pariatur reprehenderit ea voluptatum, minima quae similique impedit!"

        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Yoga Rakasiwi",
            "blog" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aliquam et deserunt tempora necessitatibus consequuntur iusto quos. Minima beatae nesciunt fuga expedita, voluptatum odio sapiente odit harum aspernatur, sint alias dignissimos culpa iure deserunt veritatis quibusdam magni quo cumque sit dolorum perferendis. Obcaecati quos nulla, fuga commodi repudiandae facilis sunt totam magni, perspiciatis optio tempora illum ea dolores aperiam officiis? Accusamus neque eveniet cupiditate iusto porro sapiente architecto unde molestiae cumque repellat pariatur reprehenderit ea voluptatum, minima quae similique impedit!"

        ]
    ];
    return view('blogs', [
        "title" => "Blog",
        "blogs" => $blogs
    ]);
});

Route::get('/blogs/{slug}', function ($slug){
    $blogs = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Yoga Rakasiwi",
            "blog" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aliquam et deserunt tempora necessitatibus consequuntur iusto quos. Minima beatae nesciunt fuga expedita, voluptatum odio sapiente odit harum aspernatur, sint alias dignissimos culpa iure deserunt veritatis quibusdam magni quo cumque sit dolorum perferendis. Obcaecati quos nulla, fuga commodi repudiandae facilis sunt totam magni, perspiciatis optio tempora illum ea dolores aperiam officiis? Accusamus neque eveniet cupiditate iusto porro sapiente architecto unde molestiae cumque repellat pariatur reprehenderit ea voluptatum, minima quae similique impedit!"

        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Yoga Rakasiwi",
            "blog" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam aliquam et deserunt tempora necessitatibus consequuntur iusto quos. Minima beatae nesciunt fuga expedita, voluptatum odio sapiente odit harum aspernatur, sint alias dignissimos culpa iure deserunt veritatis quibusdam magni quo cumque sit dolorum perferendis. Obcaecati quos nulla, fuga commodi repudiandae facilis sunt totam magni, perspiciatis optio tempora illum ea dolores aperiam officiis? Accusamus neque eveniet cupiditate iusto porro sapiente architecto unde molestiae cumque repellat pariatur reprehenderit ea voluptatum, minima quae similique impedit!"

        ]
    ];

    $new_blog = [];

    foreach($blogs as $blog){
        if($blog["slug"] === $slug){
            $new_blog = $blog;
        }
    }

    return view ('blog', [
        "title" => "single-post",
        "blog" => $new_blog
    ]);

});
