<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use GuzzleHttp\Promise\Create;

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

Route::get('me',[AuthController::class, 'me']);

Route::resource('book', BookController::class)->except(
    ['create', 'edit']
);

Route::resource('author', AuthorController::class)->except(
    ['create', 'edit']
);


//Route::get('book', [BookController::class, 'index']);
//Route::get('book/{id}', [BookController::class, 'index']);
//Route::post('book', [BookController::class, 'index']);
//Route::put('book/{id}', [BookController::class, 'index']);
//Route::delete('book/{id}', [BookController::class, 'index']);