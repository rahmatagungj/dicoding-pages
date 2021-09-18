<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsersController
};

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
// Route group for users
Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UsersController::class, 'index'])->name('users.index');
    Route::get('/{username}', [UsersController::class, 'show'])->name('users.show');
    Route::get('/{username}/event', [UsersController::class, 'event'])->name('users.event');
    Route::get('/{username}/challenge', [UsersController::class, 'challenge'])->name('users.challenge');
    Route::post('/{username}', [UsersController::class, 'update'])->name('users.update');

});
