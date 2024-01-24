<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Itemgroups;

class Route_Controller extends Controller
{
    //home

    public function RouteHome(){
        $getGroup = Itemgroups::All();

        return view('welcome',['groupnameskey' => $getGroup]);
    }


// user item page 
public function RouteItemsPage(){
    $getItems = Items::All();

    return view('itemspage',['itemskey' => $getItems]);
}

    //dashboard
    public function RouteCpanel(){

        $getItems = Items::All();

        return view('dashboard.controlpanel', ['itmeskey' => $getItems]);
    }

    public function RouteGroupNames(){

        $getGroup = Itemgroups::All();

        return view('dashboard.groupnames', ['groupnameskey' => $getGroup]);
    }

    public function RoutAddItems(){

        $getGroup = Itemgroups::All();

        return view('dashboard.additems', ['groupnameskey' => $getGroup]);
    }
    
}
