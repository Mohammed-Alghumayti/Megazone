<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Items;
use App\Models\Itemgroups;

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




}
