<?php

use App\Http\Controllers\AnotherSettingController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Models\GeneralSetting;

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
})->name('home');

//Route::get('/select2', Select2Dropdown::class);

Route::resource('/setting', SettingController::class);
Route::resource('/anothersetting', AnotherSettingController::class);
