<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('product', [ListController::class, 'product'])->name('product');
Route::get('charts', [ListController::class, 'charts'])->name('charts');
Route::get('menuoptions', [ListController::class, 'menuoptions'])->name('menuoptions');