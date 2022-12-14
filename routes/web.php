<?php

use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;

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
    abort(404);
});

Route::get('/invitation/{hash}', [InvitationController::class, 'index']);
Route::get('/skrieni-rute/custom-export', [InvitationController::class, 'export']);
Route::get('/skrieni-rute/pusti-komandu', [InvitationController::class, 'importData']);
Route::get('/skrieni-rute/raw', [InvitationController::class, 'raw']);
Route::post('/invitation/submit-rsvp/{hash}', [InvitationController::class, 'rsvp']);
