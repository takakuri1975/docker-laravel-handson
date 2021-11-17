<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Auth::routes();

Route::get('/articles', [ArticleController::class, 'index'])->name('article.list');
Route::get('/article/{id}', 'ArticleController@show')->name('article.show');

