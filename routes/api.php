<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontentcontroller;
use App\Http\Controllers\photoupload;

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
Route::post('/add',[pagecontentcontroller::class,'add']);
Route::put('/update/{id}',[pagecontentcontroller::class,'update']);
Route::post('/upload',[photoupload::class,'upload']);