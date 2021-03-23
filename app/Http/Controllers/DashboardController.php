<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('student')){
            return view('studentDash');

        }
        elseif(Auth::user()->hasRole('lecturer')){

            return view('lecturerDash');
        }
        
        elseif(Auth::user()->hasRole('admin')){

            return view('dashboard');
        }
    }
    public function myProfile()
    {
        return view('myProfile');
    }
}
