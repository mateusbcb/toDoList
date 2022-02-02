<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toDoListController;

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
    return redirect('/todo');
});

Route::prefix('todo')->group(function () {

    Route::get('/', [toDoListController::class, 'index'])->name('list');
    Route::post('/', [toDoListController::class, 'store'])->name('store');
    Route::get('/{id}/done', [toDoListController::class, 'done'])->name('done');
    Route::get('/{id}/unDone', [toDoListController::class, 'unDone'])->name('unDone');
    Route::post('/item/{title}', [toDoListController::class, 'store_item'])->name('store_item');
    Route::delete('/delete/{id}', [toDoListController::class, 'destroy'])->name('delete');
    Route::delete('/delete_list/{title}', [toDoListController::class, 'destroy_list'])->name('delete_list');
    Route::post('/update/{title}', [toDoListController::class, 'update'])->name('update');
    Route::post('/config', [toDoListController::class, 'config'])->name('config');
});
