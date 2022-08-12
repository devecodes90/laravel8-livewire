<?php

use App\Models\Article;
use App\Models\TypeArticle;
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



Route::get('/articles', function () {
    return Article::with('type')->paginate(10);
});

Route::get('/types', function () {
    return TypeArticle::with("articles")->paginate(10);
});



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
