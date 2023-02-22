<?php
use App\Http\Controllers\Admin;
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


Route::get('/admin', [Admin::class,'login']);
Route::post('/admin/loginsubmit', [Admin::class,'loginsubmit']);


Route::middleware(['Admin'])->group(function () {
    Route::view('/', 'welcome');
});