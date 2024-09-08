<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;


class TimController extends Controller
{
    public function tim()
    {
        $tim = Tim::all();
        return view('tim', ['tim'=>$tim]); 
    }
}
