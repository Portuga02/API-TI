<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeTiController;


Route::get('equipe-ti', [EquipeTiController::class,'getEquipeTi'])->name('equipe-ti');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
