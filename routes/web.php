<?php

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

Route::get('/', 'Controller@newPatientForm');
Route::post('/', 'Controller@submitNewPatientForm')->name('new-patient.submit');
Route::get('/{patient}/thank-you', 'Controller@thankyou')->name('thank-you.page');
