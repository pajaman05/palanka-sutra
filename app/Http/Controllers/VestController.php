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
use Illuminate\Support\Facades\Auth;

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



    public function novaVest()
    {
        return view('vest.nova');
    }



    public function unosVesti(Request $request)
    {
       
        // Validacija podataka
        $request->validate([
            'naslov' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:vests,slug',
            'datum' => 'required|date',
            'sazetak' => 'required|text',
            'sadrzaj' => 'required|text',
            'image_thumbnail' => 'required|url',
            'image_full' => 'required|url',
            'kategorija_id' => 'required|integer|exists:kategorijas,id',
        ]);

        // Kreiranje nove vesti
        $vest = new Vest();
        $vest->naslov = $request->naslov;
        $vest->slug = $request->slug;
        $vest->datum = $request->datum;
        $vest->sazetak = $request->sazetak;
        $vest->sadrzaj = $request->sadrzaj;
        $vest->image_thumbnail = $request->image_thumbnail;
        $vest->image_full = $request->image_full;
        $vest->kategorija_id = $request->kategorija_id;
        $vest->user_id = Auth::id(); // Postavlja se user_id na ID trenutno prijavljenog korisnika
        $vest->published = false;
        $vest->accepted = null;
        $vest->save();

        // Redirekcija na stranicu sa prikazom nove vesti
        return redirect()->route('vest.single', ['slug' => $vest->slug]);
    }







    function unesiKomentar(Request $request, $vest_id){
        $vest = Vest::findOrFail($vest_id);
        $novi_komentar = new Komentar();

        $novi_komentar->sadrzaj = $request->input('sadrzaj');
        $novi_komentar->vest_id = $vest_id;
        $novi_komentar->datum = date('Y-m-d', time());
        $novi_komentar->user_id = $request->user()->id;
        $novi_komentar->save();

        return redirect()->route('vest.singleById', ['id' => $vest_id]);
    }
}
