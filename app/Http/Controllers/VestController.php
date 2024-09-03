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
        // Prikupi najnovije vesti
        $vests = Vest::latest()->take(10)->get();

        // Prikupi dve nasumične vesti
        $randomVesti = Vest::inRandomOrder()->take(2)->get();

        // Prikupi sve kategorije
        $kategorije = Kategorija::all();

        // Prosledi sve podatke u view
        return view('homepage', [
            'vesti' => $vests,
            'randomVesti' => $randomVesti,
            'kategorije' => $kategorije
        ]);
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

    //Counter za hitove
    function single($id){
        $vest = Vest::find($id);
        $vest->hits = $vest->hits+1;
        $vest->save();
        return view('vesti.single', ['v' => $vest]);
        }
}
