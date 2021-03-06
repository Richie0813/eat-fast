<?php

namespace App\Http\Controllers;
use App\address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{

    public function addAddress()
    {
        return view('add-address');
    }

    public function uploadAddress(Request $request)
    {
        $address = new Address();
        $address->street = $request->street;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->user_id = Auth::user()->id;
        $address->save();

        return back();
    }

    public function allAddress()
    {
        $addressess = Address::where('user_id','=', Auth::user()-> id )->latest()->get();

        return view('all-address', compact('addressess'));
    }
}
    //

