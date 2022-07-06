<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
    return view('welcome');
});

Route::get('single', function () {
    return view('blog-single');
});

Route::get('register', function () {
    return view('auth.register');
});

// Laravel by default is set to 'lazy loading'
Route::get('blog', function () {
    return view('blog.blog-index', [
        // belowe example of 'eager loading'
        'posts' => Post::latest()->with('category')->get()
    ]);
});

Route::get('blog/{post:slug?}', function(Post $post) {

    //dd($post);

    return view('blog.post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function(Category $category) {
    return view('blog.blog-index', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author}', function(User $author) {
    return view('blog.blog-index', [
        'posts' => $author->posts
    ]);
});