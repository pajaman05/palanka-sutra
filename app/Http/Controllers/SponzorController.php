<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponzor;

class SponzorController extends Controller
{
    public function sponzori()
    {
        // Zelimo da prikažemo sve sponzore
        $sponzori = Sponzor::all();

        // Vraćamo view 'sponzors.single' sa informacijama o sponzorima
        return view('sponzors.single', ['sponzori' => $sponzori]);
    }
}

