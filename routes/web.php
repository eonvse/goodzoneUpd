<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ImagesController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard',        [NewsController::class, 'dashboard'])   ->name('news.dashboard');
    Route::get('/news/create',      [NewsController::class, 'create'])      ->name('news.create');
    Route::post('/news/store',      [NewsController::class, 'store'])       ->name('news.store');
    Route::get('/news/edit/{id}',   [NewsController::class, 'edit'])        ->name('news.edit');
    Route::post('/news/update',     [NewsController::class, 'update'])      ->name('news.update');
    Route::get('/news/delete/{id}', [NewsController::class, 'delete'])      ->name('news.delete');
    Route::post('news/destroy',     [NewsController::class, 'destroy'])     ->name('news.destroy');

    Route::get('/images',             [ImagesController::class, 'dashboard']) ->name('images.dashboard');
    Route::get('/images/create',      [ImagesController::class, 'create'])    ->name('images.create');
    Route::post('/images/store',      [ImagesController::class, 'store'])     ->name('images.store');
    Route::get('/images/edit/{id}',   [ImagesController::class, 'edit'])      ->name('images.edit');
    Route::post('/images/update',     [ImagesController::class, 'update'])    ->name('images.update');
    Route::get('/images/delete/{id}', [ImagesController::class, 'delete'])    ->name('images.delete');
    Route::post('images/destroy',     [ImagesController::class, 'destroy'])   ->name('images.destroy');

});

require __DIR__.'/auth.php';
