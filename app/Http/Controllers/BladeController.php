<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function blade(){
        return view('sumon');
    }

    public function new(){
        return view('new');
    }
    
}
