<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use App\Models\Vest;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{
    // Funkcija za prikaz liste kategorija
    public function kategorije()
    {
        $kategorije = Kategorija::all();
        $prvaKategorija = $kategorije->first();

        return redirect()->route('kategorija.single', ['slug' => $prvaKategorija->slug]);

        // return view('kategorija.list', ['kategorije' => $kategorije]);
    }




    // Funkcija za prikaz jedne kategorije i njenih vesti
    public function kategorija($slug)
    {

        $kategorije = Kategorija::all();
        $kategorija = Kategorija::where('slug', $slug)->firstOrFail();

        return view('kategorija.single', ['kategorija' => $kategorija, 'kategorije' => $kategorije]);

        // return view('kategorija.single', [ 'kategorija'=>$kategorija ]);
    }




    //funkcija za jednu kategoriju redirect sa id-a na slug
        public function kategorijaById($id)
        {
            $kategorija = Kategorija::findOrFail($id);
            return redirect()->route('kategorija.single', ['slug' => $kategorija->slug]);
        }

}

