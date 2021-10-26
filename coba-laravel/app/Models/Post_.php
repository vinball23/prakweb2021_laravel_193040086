<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Kevin Anggara Putra",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Accusamus pariatur a dolore ea necessitatibus blanditiis id 
            animi quae voluptatem ullam totam ducimus harum velit iure 
            sed sequi reprehenderit libero quas iusto rem eos, nostrum quis 
            amet! Animi sequi amet culpa id nobis quos reiciendis quo sed earum 
            maxime in praesentium deleniti pariatur nihil suscipit nulla laborum, 
            perspiciatis, corporis enim. Itaque porro aliquam voluptate suscipit 
            labore exercitationem. Assumenda placeat quaerat, eaque magni pariatur 
            unde quo quasi repellendus, atque, possimus velit iusto?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Accusamus pariatur a dolore ea necessitatibus blanditiis id 
            animi quae voluptatem ullam totam ducimus harum velit iure 
            sed sequi reprehenderit libero quas iusto rem eos, nostrum quis 
            amet! Animi sequi amet culpa id nobis quos reiciendis quo sed earum 
            maxime in praesentium deleniti pariatur nihil suscipit nulla laborum, 
            perspiciatis, corporis enim. Itaque porro aliquam voluptate suscipit 
            labore exercitationem. Assumenda placeat quaerat, eaque magni pariatur 
            unde quo quasi repellendus, atque, possimus velit iusto?"
        ]
    ];    

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts= static::all();
        return $posts->firstwhere('slug', $slug);
}
}
