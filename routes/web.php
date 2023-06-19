<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentController;


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

Route::get('/', [RecruitmentController::class, 'showForm'])->name('recruitment.form');
Route::post('/', [RecruitmentController::class, 'submitForm'])->name('recruitment.submit');

