<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use App\Models\Vest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class KategorijaController extends Controller
{
    
    public function index()
    {
        $kategorije = Kategorija::all();
        return view('kategorija.index', compact('kategorije'));
    }


    
    // Prikaz forme za kreiranje nove kategorije (create metoda)
    public function create()
    {
        return view('kategorija.create');
    }




    // Čuvanje nove kategorije u bazi (store metoda)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'naziv' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:kategorijas',
            'opis' => 'nullable|string',
        ]);

        $kategorija = Kategorija::create($validated);

        return redirect()->route('kategorijas.index')
                         ->with('success', 'Kategorija uspešno kreirana.');
    }



    // Prikaz jedne kategorije (show metoda)
    public function show($id)
    {
        $kategorija = Kategorija::findOrFail($id);
        return view('kategorija.show', compact('kategorija'));
    }




    // Prikaz forme za uređivanje kategorije (edit metoda)
    public function edit($id)
    {
        $kategorija = Kategorija::findOrFail($id);
        return view('crud.edits.kategorijas', compact('kategorija'))->render();
    }



    // Ažuriranje kategorije u bazi (update metoda)
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'naziv' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:kategorijas,slug,' . $id,
            'opis' => 'nullable|string',
        ]);

        $kategorija = Kategorija::findOrFail($id);
        $kategorija->update($validated);

        return redirect()->route('kategorijas.index')
                         ->with('success', 'Kategorija uspešno ažurirana.');
    }




    // Brisanje kategorije iz baze (destroy metoda)
    public function destroy($id)
    {
        $kategorija = Kategorija::findOrFail($id);
        $kategorija->delete();

        return redirect()->route('kategorijas.index')
                         ->with('success', 'Kategorija uspešno obrisana.');
    }










    // Funkcija za prikaz liste kategorija
    public function kategorije()
    {
        $kategorije = Kategorija::all();
        $prvaKategorija = $kategorije->first();

        return redirect()->route('kategorija.single', ['slug' => $prvaKategorija->slug]);
    }




    // kategorija single sa paginacijom(3)
    public function kategorija($slug)
    {
        Paginator::useBootstrap();
        $kategorije = Kategorija::all();
        $kategorija = Kategorija::where('slug', $slug)->firstOrFail();
        $vesti = $kategorija->vesti()->paginate(3);

        return view('kategorija.single', [
            'kategorija' => $kategorija,
            'kategorije' => $kategorije,
            'vesti' => $vesti
        ]);
    }





    //funkcija za jednu kategoriju redirect sa id-a na slug
        public function kategorijaById($id)
        {
            $kategorija = Kategorija::findOrFail($id);
            return redirect()->route('kategorija.single', ['slug' => $kategorija->slug]);
        }

}

