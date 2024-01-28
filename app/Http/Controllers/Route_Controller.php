<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Items;
use App\Models\Itemgroups;
use App\Models\Receipt;
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

    //------dashboard-----start
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

     //------dashboard-----end



    public function RoutToCheckOut()
    {
      
    // Retrieve the current user
    $user = Auth::user();

    // Retrieve all items in the user's cart
    $cartItems = Cart::All();

    $total=0;

    return view('payment', compact('cartItems'),['total'=>$total]);
    }


    public function RouteToThanks()
    {

        DB::table('carts')->delete();
    
        // Clear the cart count in the session
        Session::forget('countcart');       

        return view('thanks');
    
    }
    

    
}
