<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserMessagesController;


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

Route::get('/', [UserMessagesController::class, 'index'])->name('UserMessagesController.index');

Route::post('/createUserMessage', [UserMessagesController::class, 'store'])->name('UserMessagesController.store');


