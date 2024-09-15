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
use Illuminate\Support\Facades\Validator;

class VestController extends Controller
{


    public function homepage()
    {
        // Prikupi najnovije vesti
        $vests = Vest::latest()->take(10)->get();

        // popularna vest
        $popularneVesti = Vest::whereHas('komentari', function ($query) {
            $query->orderBy('datum', 'desc');
        })
        ->with(['komentari' => function ($query) {
            $query->orderBy('datum', 'desc');
        }])
        ->take(2)
        ->get();

        // Prikupi sve kategorije
        $kategorije = Kategorija::all();

        // Prosledi sve podatke u view
        return view('homepage', [
            'vesti' => $vests,
            'popularneVesti' => $popularneVesti,
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
        $kategorijas = Kategorija::all(); // Fetch all categories
        return view('vest.nova', compact('kategorijas'));
    }







    public function unosVest(Request $request)
    {

        $rules = [
            'naslov' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:vests,slug',
            'sazetak' => 'required|string',
            'sadrzaj' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'full' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategorija_id' => 'required|integer|exists:kategorijas,id',
        ];
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Svi podaci moraju biti ispravno popunjeni. Pokušajte ponovo!')
                ->withErrors($validator)
                ->withInput();
        }
    


            $vest = new Vest();
            $vest->naslov = $request->naslov;
            $vest->slug = $request->slug;
            $vest->datum = now();
            $vest->sazetak = $request->sazetak;
            $vest->sadrzaj = $request->sadrzaj;
            $vest->kategorija_id = $request->kategorija_id;
            $vest->user_id = Auth::id();
            $vest->published = false;
            $vest->accepted = null;
    

            $vest->image_thumbnail = 'placeholder-thumbnail.jpg';
            $vest->image_full = 'placeholder-full.jpg';
    

            $vest->save();
    

            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $thumbnailExtension = $thumbnail->getClientOriginalExtension();
                $thumbnailName = 'vest-thumb-' . $vest->id . '.' . $thumbnailExtension;
                $thumbnailPath = 'slike/' . $thumbnailName;
                $thumbnail->move(public_path('slike'), $thumbnailName);
                $vest->image_thumbnail = $thumbnailPath;
            }
    

            if ($request->hasFile('full')) {
                $full = $request->file('full');
                $fullExtension = $full->getClientOriginalExtension();
                $fullName = 'vest-full-' . $vest->id . '.' . $fullExtension;
                $fullPath = 'slike/' . $fullName;
                $full->move(public_path('slike'), $fullName);
                $vest->image_full = $fullPath;
            }
            
            $vest->save();
    
            session()->flash('success', 'Vest je uspešno prosleđena staff timu na pregled!');
            return redirect()->route('vest.single', ['slug' => $vest->slug]);
    }
}
