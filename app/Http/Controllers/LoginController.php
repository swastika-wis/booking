<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        switch($request->type)
        {
            case "zoho":
                return redirect()->route('zoho.dashboard');
        }
        
    }
    public function dashboard()
    {
        $leads=[];
        return view('zoho.dashboard',compact('leads'));
    }

    public function logout(Request $request)
    {
        Auth::guard('webuser')->logout();
        $request->session()->flash('success','Logout successful!');
        return redirect()->route('home');
    }
}
