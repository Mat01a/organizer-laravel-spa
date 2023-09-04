<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\User;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::post('/projects', [ProjectController::class, 'store']);
    Route::patch('/projects', [ProjectController::class, 'update']);
    Route::get('/projects/{id}/users/{username}', [ProjectController::class, 'findProposedUsers']);
    Route::post('/project/addUser', [ProjectController::class, 'addUser']);
});
Route::get('/project/{id}/users', [ProjectController::class, 'getUsersInProject']);