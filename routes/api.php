<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormContactController;
use App\Http\Controllers\FormAchatController;
use App\Http\Controllers\FormTelechargementController;


Route::post('/submitFormContact', [FormContactController::class, 'store']);
Route::post('/submitFormAchat', [FormAchatController::class, 'store']);
Route::post('/submitFormTelechargement', [FormTelechargementController::class, 'store']);

