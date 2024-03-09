<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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


Route::post('payment', [PaymentController::class, 'pay'])->name('payment');
Route::post('accept-payment', [PaymentController::class, 'acceptPayment'])->name('accept.payment');
Route::get('payment_success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('payment_cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
Route::view('check-payment', 'payment.check');
