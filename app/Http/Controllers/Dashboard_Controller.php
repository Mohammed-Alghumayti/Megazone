<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;
use App\Models\Itemgroups;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Dashboard_Controller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Logout()
    {
        Auth::logout();
       return redirect('/');
    }


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
        // Create the 'public/uploads' directory if it doesn't exist
        Storage::makeDirectory('public/uploads');

        $data = $req->validate([
            'itemname' => 'required',
            'price' => 'required|numeric|gt:0',
            'qty' => 'required|numeric|gt:0',
            'color' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Add appropriate validation rules
            'itemgroupno' => 'required',
        ]);

        // Save the image in the public/uploads folder
        $imagePath = $req->file('image')->storeAs('uploads', $req->itemname . '_' . time() . '.' . $req->image->getClientOriginalExtension(), 'public');

        // Update the $data array with the image path
        $data['image'] = $imagePath;


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

        $data = $req->validate([
            'itemname' => 'required',
            'price' => 'required|numeric|gt:0',
            'qty' => 'required|numeric|gt:0',
            'color' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Allow the image to be optional
            'itemgroupno' => 'required',
        ]);
    
        // Check if a new image is provided
        if ($req->hasFile('image')) {
            // Save the new image in the public/uploads folder
            $imagePath = $req->file('image')->storeAs('uploads', $req->itemname . '_' . time() . '.' . $req->image->getClientOriginalExtension(), 'public');
    
            // Update the $data array with the new image path
            $data['image'] = $imagePath;
        }
    
        // Update other fields
        $item->update($data);
    
        return redirect('cpanel');
    }



}
