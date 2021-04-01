<?php

use App\Http\Controllers\EducationGapController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [FormController::class, 'index']);
Route::get('education_gap_form', [EducationGapController::class, 'index']);
Route::post('print_rent', [FormController::class, 'print']);
Route::post('print_education_Gap', [EducationGapController::class, 'print']);
