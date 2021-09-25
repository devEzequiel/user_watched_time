<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'getUsers'])
    ->name('get_ordered_users');

Route::get('/channels', [UserController::class, 'getChannels'])
    ->name('get_ranked_channels');
