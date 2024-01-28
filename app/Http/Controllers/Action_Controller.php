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

    public function SaveGroupItems(Request $req)
    {
        $data = Itemgroups::create([
            'itemgroupname' => $req->itemgroupname,
            'image' => $req->image,
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
        $item->image = $req->image;

        $item->save();

        return redirect('ad-groupnames');
    }

    //-----group end------------

    //------items------------

    public function SaveItems(Request $req)
    {
        $data = $req->validate([
            'itemname' => 'required',
            'price' => 'required|numeric|gt:0',
            'qty' => 'required|numeric|gt:0',
            'color' => 'required',
            'image' => 'required', // Add appropriate validation rules
            'itemgroupno' => 'required',
        ]);



        Items::Create($data);
        /*
       $file_name = time().'_'.$req->image->getClientOriginalName();
       $file_pathCV = $req->file('image')->storeAs('uploads', $file_name, 'public');
       $file_pathCVPath='/storage/'. $file_pathCV;
       */

        return redirect('cpanel');
    }


    public function DelItem($x)
    {
        $item = Items::find($x);
        $item->delete();

        return redirect('cpanel');
    }

    public function EditItem($x)
    {
        $item = Items::where('id', $x)
            ->first();

        $groupitem = Itemgroups::All();

        return view('dashboard.edititems', ['edititemkey' => $item], ['itemgroupkey' => $groupitem]);
    }


    public function UpdateItem(Request $req)
    {
        $item = Items::find($req->id);

        $item->itemname = $req->itemname;
        $item->price = $req->price;
        $item->qty = $req->qty;
        $item->color = $req->color;
        $item->image = $req->image;
        $item->itemgroupno = $req->itemgroupno;

        $item->save();

        return redirect('cpanel');
    }

    // cart

    public function AddtoCart($id)
    {
        DB::table('carts')->insert(['itemid' => $id]);

        $item = Items::where('id', $id)->first(); // fitch items table when the parameter 'id' == the id in Items model.

        $item->update(['qty' => max(0, $item->qty - 1)]); // decerese 1 when select item.

        $count = DB::table('carts')->get()->count();

        Session::put('countcart',$count);
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
