<?php

namespace App\Http\Controllers\CustomController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class fortifyController extends Controller
{
    public function viewHome()
    {
        return view('home');
    }
    
    public function logout()
    {
        {{Auth::logout();}}
        return redirect()->route('login');
    }
}
