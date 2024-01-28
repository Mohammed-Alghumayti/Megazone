<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Itemgroups;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Action_Controller extends Controller
{
    //group

    

    // cart

    public function AddtoCart($id)
    {
        DB::table('carts')->insert(['itemid' => $id]);

        $item = Items::where('id', $id)->first(); // fitch items table when the parameter 'id' == the id in Items model.

        $item->update(['qty' => max(0, $item->qty - 1)]); // decerese 1 when select item.

        $count = DB::table('carts')->get()->count();

        Session::put('countcart', $count);
        return redirect('u-itmes/' . $item->itemgroupno); // access the propirty itemsgroupno
    }


    /*
    public function testapi()
    {
        $apiURL = 'https://v1.baseball.api-sports.io/leagues';
        $headers = [
            'Content-Type' => 'application/json',
            'X-RapidAPI-Key' => '24c939c2ba293c859d5ecd476932d293'
        ];
        $response = Http::withHeaders($headers)->get($apiURL);
        $data = $response->json();

        dd($data);
    }
    */
}
