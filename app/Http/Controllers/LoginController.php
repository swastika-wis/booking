<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return redirect('dashboard');
    }
    public function dashboard()
    {
        $type="admin";
        return view('dashboard',compact('type'));
    }

    public function logout(Request $request)
    {
        Auth::guard('webuser')->logout();
        $request->session()->flash('success','Logout successful!');
        return redirect()->route('home');
    }
}
