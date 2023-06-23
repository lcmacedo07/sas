<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\v1\BookController;

Route::get('/', function () {
	return view('welcome');
});

Route::prefix('v1')->group(function () {

	Route::prefix('auth')->group(function () {
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/login', [AuthController::class, 'login']);


        Route::middleware('auth:sanctum')->group(function () {
            Route::post('/logout', [AuthController::class, 'logout']);
        });
    });

	Route::middleware('auth:sanctum')->group(function () {

		Route::prefix('books')->group(function () {
            Route::get('/', [BookController::class, 'index']);
            Route::get('/{uuid}', [BookController::class, 'show']);
            Route::get('/{uuid}/details', [BookController::class, 'details']);
            Route::post('/', [BookController::class, 'store']);
            Route::put('/{uuid}', [BookController::class, 'update']);
            Route::delete('/{uuid}', [BookController::class, 'delete']);
            Route::get('/trash', [BookController::class, 'trash']);
            Route::post('/trash/{uuid}', [BookController::class, 'restore']);
        });
	});
});
