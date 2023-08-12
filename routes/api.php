<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskApiController;

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

Route::get('/tasks', [TaskApiController::class, 'index']);
Route::get('/task/{id}', [TaskApiController::class, 'index_single']);
Route::post('/create-task', [TaskApiController::class, 'store']);
Route::put('/update-task/{id}', [TaskApiController::class, 'update']);
Route::delete('/delete-task/{id}', [TaskApiController::class, 'destroy']);

