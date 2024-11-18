<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test-token', function () {
//     $user = User::first();

//     if (!$user) {
//         return response()->json(['message' => 'No user found'], 404);
//     }

//     $token = $user->createToken('auth_token')->plainTextToken;

//     return response()->json([
//         'status' => 'success',
//         'message' => 'Token generated successfully',
//         'access_token' => $token,
//         'token_type' => 'Bearer',
//     ]);
// });
