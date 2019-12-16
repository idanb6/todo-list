<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
header("Access-Control-Allow-Origin: http://localhost");
Route::get('tasks', 'Task\TastList@tasks');
Route::get('tasks/{id}', 'Task\TastList@taskByID');
Route::post('tasks', 'Task\TastList@addTask');
Route::put('tasks/{tasks}', 'Task\TastList@editTask');
Route::delete('tasks/{tasks}', 'Task\TastList@deleteTask');

// Route::apiResource('tasks', 'Task\Task');