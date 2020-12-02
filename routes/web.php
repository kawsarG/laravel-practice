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
use Illuminate\Support\Facades\DB;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    $articles = App\Models\Article::latest('id')->get();
    return view('about', [
        'articles' => $articles
    ]);
});
Route::put('/articles/{article}', 'App\Http\Controllers\ArticleController@update');

Route::get('/articles/create', 'App\Http\Controllers\ArticleController@create');
Route::post('/articles', 'App\Http\Controllers\ArticleController@store');
Route::get('/articles/{article}', 'App\Http\Controllers\ArticleController@show');
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticleController@edit');
