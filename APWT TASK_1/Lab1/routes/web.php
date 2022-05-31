<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class, 'home'])->name('page.landingpage');
Route::get('/page.about', [ProductController::class, 'about'])->name('page.about');
Route::get('/page.contact', [ProductController::class, 'contact'])->name('page.contact');
Route::get('/products.service', [ProductController::class, 'list'])->name('products.service');
Route::get('/products.teams/{id}/{name}', [ProductController::class, 'teams'])->name('products.teams');