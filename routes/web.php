<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/section/{id}', [FrontController::class, 'show_section'])->name('show_section');
Route::get('/lesson/{id}', [FrontController::class, 'show_lesson'])->name('show_lesson');
Route::get('/quiz-example', function () {
    return view('admin.quiz-example');
})->name('quiz-example');
