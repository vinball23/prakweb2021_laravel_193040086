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
        "name" => "Kevin Anggara",
        "email" => "vinputra.16@gmail.com",
        "image" =>  "kevin.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    ];
    

    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});


//halaman single post

Route::get('posts/{slug}', function($slug) { 
    $blog_posts = [
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
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});