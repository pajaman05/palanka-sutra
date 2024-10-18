<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tim;
use App\Models\Sponzor;
use App\Models\Diskusija;
use App\Models\Kategorija;
use App\Models\Komentar;

class TableController extends Controller
{

    // funkcija za prikaz tabele
    public function fetchTable($table)
    {
        switch($table) {
            case 'users':
                $data = User::all();
                break;
            case 'tims':
                $data = Tim::all();
                break;
            case 'sponzors':
                $data = Sponzor::all();
                break;
            case 'diskusijas':
                $data = Diskusija::all();
                break;
            case 'kategorijas':
                $data = Kategorija::all();
                break;
            case 'komentars':
                $data = Komentar::all();
                break;
            default:
                $data = [];
        }

        // Vraća view koji sadrži samo HTML za tabelu
        return view('crud.tables.' . $table, ['data' => $data])->render();
    }




    public function fetchEdit($table, $id)
    {
        // Determine the model based on the table name
        switch($table) {
            case 'users':
                $model = User::class;
                break;
            case 'tims':
                $model = Tim::class;
                break;
            case 'sponzors':
                $model = Sponzor::class;
                break;
            case 'diskusijas':
                $model = Diskusija::class;
                break;
            case 'kategorijas':
                $model = Kategorija::class;
                break;
            case 'komentars':
                $model = Komentar::class;
                break;
            default:
                abort(404); // Return 404 if table is not found
        }
    
        // Find the record by ID
        $item = $model::findOrFail($id);
    
        // Return the edit view for the item, passing both the item and table variables
        return view('crud.edits.' . $table, compact('item', 'table'))->render(); // Added `render()` to return the rendered view
    }
    

    

}



