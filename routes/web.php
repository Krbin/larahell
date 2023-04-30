<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign_up');
});





//All payments
Route::get('/', [PaymentController::class, 'index']);


// Store Payment data

Route::post('/payments', [PaymentController::class, 'store']);

// Show edit form
Route::get('/payments/{payment}/edit', [PaymentController::class, 'edit']);

// Edit Submit to Update
Route::put('/payments/{payment}', [PaymentController::class, 'update']);


Route::delete('/payments/{payment}', [PaymentController::class, 'destroy']);


//Payment detail
Route::get('/payments/{payment}', [PaymentController::class, 'show']);
