<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::resource('/todo', TodoListController::class);
Route::get('/todo/create', [TodoListController::class, 'create'])->name('todo.create');
Route::post('/todo/store', [TodoListController::class, 'store'])->name('todo.store');
