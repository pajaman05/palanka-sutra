<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vest;
use App\Models\Komentar;
use Illuminate\Support\Facades\Validator;

class KomentarController extends Controller
{
    
    function unesiKomentar(Request $request, $vest_id){

        $rules = [
            'sadrzaj' => 'required|string|max:1000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Moraš uneti sadržaj komentara da bi ga objavio!');
        }


        $vest = Vest::findOrFail($vest_id);
        $novi_komentar = new Komentar();

        $novi_komentar->sadrzaj = $request->input('sadrzaj');
        $novi_komentar->vest_id = $vest_id;
        $novi_komentar->datum = date('Y-m-d', time());
        $novi_komentar->user_id = $request->user()->id;
        $novi_komentar->save();

    return redirect()->back()->with('success', 'Komentar je uspesno poslat!');
    // return redirect()->route('vest.singleById', ['id' => $vest_id])->with('message', 'Komentar je uspesno poslat...');
}

}
