<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/artikelen/{slug}', [ArticleController::class, 'show'])->name('articles.show');


// Dutch language routes
Route::get('/nl/bronnen/{slug}', [ContentController::class, 'showResource'])->name('resource.show.nl');
Route::get('/nl/artikelen/{slug}', [ContentController::class, 'showArticle'])->name('article.show.nl');
Route::get('/nl/{slug}', [ContentController::class, 'showPage'])->name('page.show.nl');
Route::get('/nl', [ContentController::class, 'showFrontPage'])->name('frontpage.show.nl');

// English language routes
Route::get('/en/resources/{slug}', [ContentController::class, 'showResource'])->name('resource.show.en');
Route::get('/en/articles/{slug}', [ContentController::class, 'showArticle'])->name('article.show.en');
Route::get('/en/{slug}', [ContentController::class, 'showPage'])->name('page.show.en');
Route::get('/en', [ContentController::class, 'showFrontPage'])->name('frontpage.show.en');

// Default language route (assuming English)
Route::get('/', [ContentController::class, 'showFrontPage'])->name('frontpage.show');
