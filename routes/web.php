<?php

use App\Http\Controllers\EducationGapeController;
use App\Http\Controllers\FormController;
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

Route::get('/', [FormController::class, 'index']);
Route::get('education_gape_form', [EducationGapeController::class, 'index']);
Route::post('print_kiraya', [FormController::class, 'print']);
Route::post('print_education_gape', [EducationGapeController::class, 'print']);