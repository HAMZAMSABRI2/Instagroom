<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    
        public function home()
        {
            $user = Auth::user();
            
            return view('post' , compact('user'));
        }
}
