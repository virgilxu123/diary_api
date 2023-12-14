<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('diaries', [DiaryController::class, 'index']);
Route::get('diaries/{diary}', [DiaryController::class, 'show']);
Route::post('diaries', [DiaryController::class, 'store']);
Route::put('diaries/{diary}', [DiaryController::class, 'update']);
Route::delete('diaries/{diary}', [DiaryController::class, 'destroy']);
