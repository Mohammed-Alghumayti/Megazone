<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Items;
use App\Models\Itemgroups;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Route_Controller extends Controller
{
    //home

    public function RouteHome(){
        $getGroup = Itemgroups::All();

        $count = DB::table('carts')->get()->count();
        Session::put('countcart',$count);

        return view('welcome',['groupnameskey' => $getGroup]);

        
    }


// user item page 
public function RouteItemsPage($id){
    $getItems = Items::where('itemgroupno',$id)
    ->get();

    $getGroup = Itemgroups::where('id',$id)->get();
   

    return view('itemspage',['itemskey' => $getItems],['groupnameskey' => $getGroup]);
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



    public function RoutToCheckOut()
    {
      
    // Retrieve the current user
    $user = Auth::user();

    // Retrieve all items in the user's cart
    $cartItems = Cart::All();

    $total=0;

    return view('payment', compact('cartItems'),['total'=>$total]);
    }
    
}
