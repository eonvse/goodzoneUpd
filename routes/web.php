<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;

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
});

require __DIR__.'/auth.php';
