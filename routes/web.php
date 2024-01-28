<?php

use App\Http\Controllers\Action_Controller;
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


Route::get('/', [Route_Controller::class, 'Routehome'])->name('home');// route me to 'welcome'page.

Auth::routes();

//---------user site------
Route::get('/u-itmes/{id}', [Route_Controller::class, 'RouteItemsPage'])->name('Toitems'); //--> {{will make it => secure}} defual route to cpanel which is 'show items'.


Route::get('/checkout', [Route_Controller::class, 'RoutToCheckOut'])->name('checkout')->middleware('auth');
Route::post('/u-thx', [Route_Controller::class, 'RouteToThanks'])->name('comeagain');

Route::get('/thx', function (){
    return view('thanks');
});

    //ADD to cart
Route::get('/u-addcart/{id}', [Action_Controller::class, 'AddtoCart'])->name('addtocart');


//---------user site--end----


//dashboard
Route::get('/cpanel', [Route_Controller::class, 'RouteCpanel'])->name('Tocpanel')->middleware('auth');; //--> {{will make it => secure}} defual route to cpanel which is 'show items'.
Route::get('/ad-groupnames', [Route_Controller::class, 'RouteGroupNames'])->name('Togroupnames')->middleware('auth');; //--> {{will make it => secure}} defual route to cpanel which is 'show items'.
Route::get('/ad-additems', [Route_Controller::class, 'RoutAddItems'])->name('Toadditems')->middleware('auth');; //--> {{will make it => secure}} defual route to cpanel which is 'show items'.

//dashboard -> itemsgroup functions
Route::post('/savegroupitem', [Dashboard_Controller::class, 'SaveGroupItems'])->name('savegroups'); 
Route::get('/deletegroup/{x}', [Dashboard_Controller::class, 'DelGroupItem'])->name('delg');
Route::get('/editgroup/{x}', [Dashboard_Controller::class, 'EditGroupItem'])->name('editg');
Route::post('/ad-groupnames', [Dashboard_Controller::class, 'UpdateGroupItem'])->name('updateg'); 


//dashboard -> items 
Route::post('/saveitem', [Dashboard_Controller::class, 'SaveItems'])->name('savegitems'); 
Route::get('/deletitem/{x}', [Dashboard_Controller::class, 'DelItem'])->name('delitem');
Route::get('/edititem/{x}', [Dashboard_Controller::class, 'EditItem'])->name('edititem');
Route::post('/cpanel', [Dashboard_Controller::class, 'UpdateItem'])->name('updateitem'); 



//Route::get('/testapi', [Action_Controller::class, 'testapi'])->name('editg');

//dashboard-controller
Route::get('/logout', [Dashboard_Controller::class, 'Logout'])->name('logout'); //--> logout