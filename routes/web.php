<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    // Route::get('/payment', function () {
    //     return view
    // });
    Route::get('pay', [PaymentController::class, 'index'])->name('payments');
    Route::get('pay/callback', [PaymentController::class, 'payment_callback'])->name('pay.callback');

    Route::post('pay', [PaymentController::class, 'make_payment'])->name('pay');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('pay', [PaymentController::class, 'index']);
// Route::get('pay/callback', [PaymentController::class, 'payment_callback'])->name('pay.callback');

// Route::post('pay', [PaymentController::class, 'make_payment'])->name('pay');