<?php

use App\Http\Controllers\UserControler;
use App\Http\Controllers\PageControler;
use App\Http\Controllers\NomeControler;
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
    return redirect()->route('users.index');
})->name('index');

Route::prefix('users')->group(function () {
    Route::get('/', [UserControler::class, 'index'])->name('users.index');
    Route::get('/create', [UserControler::class, 'create'])->name('users.create');
    Route::post('/store', [UserControler::class, 'store'])->name('users.store');
    Route::get('/{userId}', [UserControler::class, 'show'])->name('users.show');
    Route::get('/{userId}/edit', [UserControler::class, 'edit'])->name('users.edit');
    Route::post('/{userId}/update', [UserControler::class, 'update'])->name('users.update');
    Route::get('/{userId}/confirm_delete', [UserControler::class, 'confirmDelete'])->name('users.confirm_delete');
    Route::delete('/{userId}/delete', [UserControler::class, 'delete'])->name('users.delete');
    /*
    Route::match([
        'get',
        'post',
        'delete',
    ], '/users/{userId}/delete', [UserControler::class, 'delete'])->name('users.delete');
    */
});

Route::prefix('pages')->group(function () {
    Route::get('/', [PageControler::class, 'index'])->name('pages.index');
    Route::get('/create', [PageControler::class, 'create'])->name('pages.create');
    Route::post('/store', [PageControler::class, 'store'])->name('pages.store');
    Route::get('/{pageId}', [PageControler::class, 'show'])->name('pages.show');
    Route::get('/{pageId}/edit', [PageControler::class, 'edit'])->name('pages.edit');
    Route::post('/{pageId}/update', [PageControler::class, 'update'])->name('pages.update');
    Route::get('/{pageId}/confirm_delete', [PageControler::class, 'confirmDelete'])->name('pages.confirm_delete');
    Route::delete('/{pageId}/delete', [PageControler::class, 'delete'])->name('pages.delete');
    /*
    Route::match([
        'get',
        'post',
        'delete',
    ], '/users/{userId}/delete', [UserControler::class, 'delete'])->name('users.delete');
    */
});

Route::prefix('nomes')->group(function () {
    Route::get('/', [NomeControler::class, 'index'])->name('nomes.index');
    Route::get('/create', [NomeControler::class, 'create'])->name('nomes.create');
    Route::post('/store', [NomeControler::class, 'store'])->name('nomes.store');
    Route::get('/{nomeId}', [NomeControler::class, 'show'])->name('nomes.show');
    Route::get('/{nomeId}/edit', [NomeControler::class, 'edit'])->name('nomes.edit');
    Route::post('/{nomeId}/update', [NomeControler::class, 'update'])->name('nomes.update');
    Route::get('/{nomeId}/confirm_delete', [NomeControler::class, 'confirmDelete'])->name('nomes.confirm_delete');
    Route::delete('/{nomeId}/delete', [NomeControler::class, 'delete'])->name('nomes.delete');
    /*
    Route::match([
        'get',
        'post',
        'delete',
    ], '/users/{userId}/delete', [UserControler::class, 'delete'])->name('users.delete');
    */
});
