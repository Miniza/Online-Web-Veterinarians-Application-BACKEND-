<?php
use App\Http\Controllers\API\OwnerController;
use App\Http\Controllers\API\PetsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/owners', [OwnerController::class,'index']);
Route::post('/add-owner', [OwnerController::class,'store']);
Route::delete('/delete-owner/{id}', [OwnerController::class,'destroy']);

Route::get('/pets', [PetsController::class, 'index']);
Route::post('/add-pets', [PetsController::class,'store']);
Route::delete('/delete-pets/{id}', [PetsController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
