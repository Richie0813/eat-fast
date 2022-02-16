<?php

namespace App\Http\Controllers;

use App\complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    public function addComplain()
    {
        return view('add-complain');
    }
    public function uploadComplain(Request $request)
    {
        $complain = new complain();
        $complain->tittle = $request->tittle;
        $complain->message = $request->message;
        $complain->user_id = Auth::user()->id;
        $complain->save();

        return back();
    }

    //
}
