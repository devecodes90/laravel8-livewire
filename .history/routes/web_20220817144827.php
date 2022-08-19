<?php

use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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






Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([
    "middleware" => ["auth", "auth.admin"],
    "middleware" => ["auth", "auth.admin"],
    "middleware" => ["auth", "auth.admin"],
], function (){

});
Route::get('/abilitations/utilisateurs',
 [UserController::class, 'index'])
 ->name('utilisateurs')
 ->middleware("auth.admin");
