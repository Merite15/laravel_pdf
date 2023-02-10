<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('pdf')->group(function () {
    Route::controller(PdfController::class)->group(function () {
        Route::get('/print', 'print')->name('estimate.print');
    });
});

Route::prefix('ticket')->group(function () {
    Route::controller(TicketController::class)->group(function () {
        Route::get('/', 'index')->name('all-tickets');
        Route::get('/customer', 'customer')->name('all-customers');
        Route::get('/user', 'user')->name('all-users');
    });
});
