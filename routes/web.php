<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user', function(){
    return "<h1>Saparkul Toktan</h1>";
});

Route::get('main', function(){
    return view('main');
});

Route::get('post/create', function(){
    DB::table('posts')->insert([
        'title' => 'Almaty',
        'body' => 'Almaty is the southern capital of Kazakhstan. Located in the foothills of the mountains, it is a city with amazing nature. Almaty is a place of support for development and my favorite city.'
    ]);
});

Route::get('post', function(){
    $post = Post::find(1);
    return $post;
});


