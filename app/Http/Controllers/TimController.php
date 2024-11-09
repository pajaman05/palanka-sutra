<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;


class TimController extends Controller
{
    public function tim()
    {
        $tim = Tim::all();
        return view('tim.tim', ['tim'=>$tim]); 
    }

    // edit funkcija za dashboard edit-formu
    public function edit($id)
    {
        $tim = Tim::findOrFail($id);
        return view('crud.edits.tims', compact('tim'))->render();
    }



    public function destroy($id)
    {
        $tim = Tim::findOrFail($id);
        $tim->delete();
    }
}
