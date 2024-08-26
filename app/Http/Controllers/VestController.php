<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vest;
use App\Models\User; 
use App\Models\Diskusija;
use App\Models\Kategorija;
use App\Models\Komentar; 
use App\Models\Sponzor;
use App\Models\Tim;

class VestController extends Controller
{
    public function homepage()
    {
        $vests = Vest::latest()->take(10)->get();
        $kategorije = Kategorija::all();
        
        // Salje podatke za najnovije vesti i kategorije na pocetnu
        return view('homepage', ['vesti' => $vests, 'kategorije' => $kategorije]);
    }
   
    public function vest($slug)
    {
        // Proveri da li je slug broj (integer)
        if (is_numeric($slug)) {
            // Ako je broj, koristi find() za pretragu po ID-u
            $vest = Vest::findOrFail($slug);
        } else {
            // Ako nije broj, koristi slug za pretragu
            $vest = Vest::where('slug', $slug)->firstOrFail();
        }

        // Prikaz view-a sa pronađenom vešću
        return view('vest.single', ['vest' => $vest]);
    }
}
