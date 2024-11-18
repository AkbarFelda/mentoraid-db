<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Endpoint untuk register
Route::post('/register', [AuthController::class, 'register']);

// Endpoint untuk login
Route::post('/login', [AuthController::class, 'login']);

// Endpoint yang memerlukan autentikasi
Route::middleware('auth:sanctum')->group(function () {
    // Mengambil data user yang sedang login
    Route::get('/user', function (Request $request) {
        return response()->json([
            'status' => 'success',
            'message' => 'User details retrieved successfully',
            'data' => $request->user(),
        ]);
    });
});
