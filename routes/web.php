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
    return view('login');
})->name('login');

Route::get('/home', function () {
    return view('welcome');
})->name('home');


Route::get('/Create',App\Http\Controllers\Admin\Create::class)->name('create');


Route::get('/Create/{user}',App\Http\Controllers\Admin\Index::class)->name('show');

Route::get('/view',App\Http\Controllers\Admin\Table::class)->name('view');


Route::get('/Edit/{user}',App\Http\Controllers\Admin\Edit::class)->name('Edit');