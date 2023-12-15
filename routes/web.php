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
    return view('home');
});
Route::get('/laravel', function () {
    $data = [
        'title' => 'Laravel',
        'image' => 'https://media.licdn.com/dms/image/D5612AQGrUk-Euq6J_w/article-cover_image-shrink_600_2000/0/1677780279349?e=2147483647&v=beta&t=OJ7_EgucF9GJPnzVn23mbaXtKdrf-kvDffVHGC-h38w',
        'text' => 'Laravel è un framework open source di tipo MVC scritto in PHP per lo sviluppo di applicazioni web, creato nel 2011 da Taylor Otwell come derivazione di Symfony.',
    ];

    return view('laravel', $data);
})->name('laravel');
