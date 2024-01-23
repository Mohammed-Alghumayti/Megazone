<?php

use App\Http\Controllers\Dashboard_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Route_Controller;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', [Route_Controller::class, 'Routehome'])->name('home');

Route::get('/testpage', [Route_Controller::class, 'RouteTest'])->name('test');
Auth::routes();



//dashboard


Route::get('/cpanel', [Route_Controller::class, 'RouteCpanel']); //--> logout
//dashboard-controller

Route::get('/logout', [Dashboard_Controller::class, 'Logout'])->name('logout'); //--> logout