<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponzor;

class SponzorController extends Controller
{
    public function page()
    {
        // Pretpostavimo da želimo da prikažemo sve sponzore
        $sponzori = Sponzor::all();

        // Vraćamo pogled 'sponzor.page' sa podacima o sponzorima
        return view('sponzor.page', ['sponzori' => $sponzori]);
    }



    public function edit($id)
    {
        $sponzori = Sponzor::findOrFail($id);
        return view('crud.edits.sponzors', compact('sponzori'))->render();
    }


    public function destroy($id)
    {
        $sponzor = Sponzor::findOrFail($id);
        $sponzor->delete();
    }
}

