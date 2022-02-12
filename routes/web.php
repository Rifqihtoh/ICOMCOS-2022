<?php

use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkshopController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => ['role:user']], function() {
    Route::get('/dashboard', [UserController::class, 'welcome'])->name('dashboard');
    Route::resource('submission', SubmissionController::class);
    Route::resource('workshop', WorkshopController::class);
    Route::resource('participant', ParticipantController::class);
});

require __DIR__.'/auth.php';
