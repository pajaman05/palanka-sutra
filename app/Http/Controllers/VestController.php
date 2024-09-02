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

   


    

    public function vest($slug){
        $vest = Vest::where('slug', $slug)->firstOrFail();
        return view('vest.single', [ 'vest'=>$vest ]);
      }



      public function vestById($id)
        {
            $vest = Vest::findOrFail($id);
            return redirect()->route('vest.single', ['slug' => $vest->slug]);
        }

    public function novaVest(){}

    public function unosVesti(){}
}
