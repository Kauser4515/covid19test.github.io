<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::orderBy('id', 'desc')->paginate(10);
        return view('shop.index', compact('shops'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $locations = Location::all();
        return view('shop.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => ['required'],
            'link' => ['required'],
            'address' => ['required'],
        ]);
        
            $shop = new Shop();
            $shop->title = $request->title;  
            $shop->link = $request->link;  
            $shop->address = $request->address; 
            $shop->phone = $request->phone;         
            //image upload
            if($request->hasfile('image')) 
                { 
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename =time().'.'.$extension;
                $file->move('public/img/shop/', $filename);
                $shop->image = $filename;
            }
            $shop->save();
            $shop->locations()->attach($request->locations); 
        //return $request->all();

        Toastr::success('Shop successfully Saved','Success');
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locations = Location::all();
        $shop = Shop::with('locations')->findOrFail($id);
        return view('shop.edit', compact('shop', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        
         $this->validate($request,[
            'title' => ['required', 'max:150'],
            'link' => ['required', 'max:150'],
            'address' => ['required', 'max:150'],
        ]);
        
            $shop->title = $request->title; 
            $shop->link = $request->link;  
            $shop->address = $request->address; 
            $shop->phone = $request->phone;         
            //image upload
            if($request->hasfile('image')) 
                { 
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename =time().'.'.$extension;
                $file->move('public/img/shop/', $filename);
                $shop->image = $filename;
            }
            $shop->save();
            $shop->locations()->sync($request->locations); 
        //return $request->all();
        Toastr::success('Shop successfully Updated','Success');
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
