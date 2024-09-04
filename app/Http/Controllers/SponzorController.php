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
}

