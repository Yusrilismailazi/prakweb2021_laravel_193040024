<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;

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
        "name" => "Yusril Ismail Azi",
        "email" => "Aziyusril30@gamil.com",
        "image" => "aji.jpg"

]);

});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama" ,
            "author" => "Yusril Ismail Azi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quo veritatis eos ipsam, nihil qui dolorem veniam, aliquam delectus tempore voluptatem repellendus provident, ea vel? Nesciunt nulla, assumenda culpa vero et illum dicta magnam eum minima sed eveniet. Placeat dolores non odio soluta quibusdam? Ut dolorum voluptate incidunt omnis sequi error aut dolores vitae tempore adipisci nostrum, ex deserunt provident repellendus, qui explicabo. Harum ea perspiciatis labore magni aspernatur, nemo blanditiis aut deserunt ullam voluptatem voluptates amet officia aliquam obcaecati?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-pertama" ,
            "author" => "Adnan pidaus",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quo veritatis eos ipsam, nihil qui dolorem veniam, aliquam delectus tempore voluptatem repellendus provident, ea vel? Nesciunt nulla, assumenda culpa vero et illum dicta magnam eum minima sed eveniet. Placeat dolores non odio soluta quibusdam? Ut dolorum voluptate incidunt omnis sequi error aut dolores vitae tempore adipisci nostrum, ex deserunt provident repellendus, qui explicabo. Harum ea perspiciatis labore magni aspernatur, nemo blanditiis aut deserunt ullam voluptatem voluptates amet officia aliquam obcaecati?"
        ],
    
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts

    ]);
});

//halaman single post
Route :: get('posts/{slug}' , function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama" ,
            "author" => "Yusril Ismail Azi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quo veritatis eos ipsam, nihil qui dolorem veniam, aliquam delectus tempore voluptatem repellendus provident, ea vel? Nesciunt nulla, assumenda culpa vero et illum dicta magnam eum minima sed eveniet. Placeat dolores non odio soluta quibusdam? Ut dolorum voluptate incidunt omnis sequi error aut dolores vitae tempore adipisci nostrum, ex deserunt provident repellendus, qui explicabo. Harum ea perspiciatis labore magni aspernatur, nemo blanditiis aut deserunt ullam voluptatem voluptates amet officia aliquam obcaecati?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-pertama" ,
            "author" => "Adnan pidaus",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quo veritatis eos ipsam, nihil qui dolorem veniam, aliquam delectus tempore voluptatem repellendus provident, ea vel? Nesciunt nulla, assumenda culpa vero et illum dicta magnam eum minima sed eveniet. Placeat dolores non odio soluta quibusdam? Ut dolorum voluptate incidunt omnis sequi error aut dolores vitae tempore adipisci nostrum, ex deserunt provident repellendus, qui explicabo. Harum ea perspiciatis labore magni aspernatur, nemo blanditiis aut deserunt ullam voluptatem voluptates amet officia aliquam obcaecati?"
        ],
    
    ];

   $new_post = [];

    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;

        }
    }
    return view('post' , [
        "title"  => "Single Post",
        "post" => $new_post 
    ]);

});

