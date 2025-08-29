<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
