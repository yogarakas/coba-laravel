<?php

namespace App\Models;

class Blog 
{
    private static $blogs = [
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

    public static function all() {
        return self::$blogs;
    }

    public static function find($slug) {
        $blogss = self::$blogs;

        $blog = [];

        foreach($blogss as $b){
            if($b["slug"] === $slug){
                $blog = $b;
            }
        }

        return $blog;
    }
}
