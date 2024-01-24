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

Auth::routes();

//user site
Route::get('/u-itmes', [Route_Controller::class, 'RouteItemsPage'])->name('Toitems'); //--> {{will make it => secure}} defual route to cpanel which is 'show items'.



//dashboard
Route::get('/cpanel', [Route_Controller::class, 'RouteCpanel'])->name('Tocpanel'); //--> {{will make it => secure}} defual route to cpanel which is 'show items'.
Route::get('/ad-groupnames', [Route_Controller::class, 'RouteGroupNames'])->name('Togroupnames'); //--> {{will make it => secure}} defual route to cpanel which is 'show items'.

//dashboard-controller
Route::get('/logout', [Dashboard_Controller::class, 'Logout'])->name('logout'); //--> logout