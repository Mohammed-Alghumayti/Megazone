<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Itemgroups;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Action_Controller extends Controller
{
    //group

    public function SaveGroupItems(Request $req)
    {
        $data = Itemgroups::create([
            'itemgroupname' => $req->itemgroupname
        ]);

        $data->save();

        return redirect('ad-groupnames'); // 'ad-groupnames' هذا اسم الروات حق الصفحة عشان بالمرة هو يحولني لها
    }

    public function DelGroupItem($x)
    {
        $item = Itemgroups::find($x);
        $item->delete();

        return redirect('ad-groupnames');
    }


    public function EditGroupItem($x)
    {
        $item = Itemgroups::where('id', $x)
            ->first();

        return view('dashboard.editgroupname', ['editgroupkey' => $item]);
    }


    public function UpdateGroupItem(Request $req)
    {
        $item = Itemgroups::find($req->id);

        $item->itemgroupname = $req->itemgroupname; // namegroup name of form 'name' line 13 page 'editgroupitmes'.

        $item->save();

        return redirect('ad-groupnames');
    }

    //-----group end------------

    //------items------------

    public function SaveItems(Request $req)
    {
        $data = Items::Create([
            'itemname' => $req->itemname,
            'price' => $req->price,
            'qty' => $req->qty,
            'color' => $req->color,
            'image' => $req->image,
            'itemgroupno' => $req->itemgroupno,
        ]);

        $data->save();

        return redirect('cpanel');
    }


    public function DelItem($x)
    {
        $item = Items::find($x);
        $item -> delete();

        return redirect('cpanel');
    }

    public function EditItem($x)
    {
        $item = Items::where('id', $x)
        ->first();

        $groupitem = Itemgroups::All();

        return view('dashboard.edititems',['edititemkey' => $item], ['itemgroupkey' => $groupitem]);
    }


    public function UpdateItem(Request $req)
    {
        $item = Items::find($req -> id);
        
        $item -> itemname = $req -> itemname; 
        $item -> price = $req -> price; 
        $item -> qty = $req -> qty; 
        $item -> color = $req -> color; 
        $item -> image = $req -> image; 
        $item -> itemgroupno = $req -> itemgroupno; 

        $item->save();

        return redirect('cpanel');
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
