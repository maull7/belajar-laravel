<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['judul' => 'halaman home']);
});
Route::get('/about', function () {
    return view('about', ['judul' => 'halaman about']);
});
Route::get('/posts', function () {
    return view('posts', [
        'judul' => 'halaman blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}/', function (Post $post) {
    // $post = Post::find($slug);

    return view('post', ['judul' => 'Selengkapnya', 'post' => $post]);
});



Route::get('/contact', function () {
    return view('contact', ['judul' => 'halaman contact']);
});


Route::get('/Postt', function () {
    return view('Postt', ['judul' => 'coba']);
});
Route::get('/authors/{user:slug}/', function (User $user) {

    return view('posts', ['judul' => 'Artikel dari ' . $user->name, 'posts' => $user->posts]);
});


Route::get('/posts?category={category:slug}', function (Category $category) {

    return view('posts', ['judul' => 'Tentang ' . $category->name, 'posts' => $category->posts]);
});
