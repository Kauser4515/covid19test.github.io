<?php

namespace App\Http\Controllers;

use App\Location;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;

class smokeyConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::latest('id')->paginate(12);
        $locations = Location::all();
        return view('welcome', get_defined_vars());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function location($id){
        $locations = Location::all();
        $area = Location::with('shops')->findOrFail($id);
        return view('location', compact('locations', 'area'));
    }
}
