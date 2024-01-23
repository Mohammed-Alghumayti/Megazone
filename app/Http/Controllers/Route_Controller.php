<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class Route_Controller extends Controller
{
    //

    public function RouteHome(){
        return view('welcome');
    }

    public function RouteTest(){
        return view('itemspage');
    }

    //dashboard
    public function RouteCpanel(){

        $getItems = Items::All();

        return view('dashboard.controlpanel', ['itmeskey' => $getItems]);
    }
    
}
