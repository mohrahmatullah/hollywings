<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product', [ListController::class, 'product'])->name('product');
Route::get('charts', [ListController::class, 'charts'])->name('charts');
Route::get('menuoptions', [ListController::class, 'menuoptions'])->name('menuoptions');
Route::get('user', [ListController::class, 'user'])->name('user');