<?php

namespace App\Http\Controllers;

use App\Models\Graduate;
use Illuminate\Http\Request;

class RechercheController extends Controller
{
    public function index(){

        return view('recherche', [
            'title'=>'',
            'graduates'=>[],
        ]);
    }

    public function results(Request $request){
        $request->validate([
            'recherche'=>'required|min:3'
        ]);

        $graduate = Graduate::where('matricule', $request->recherche)->with('specialite')->with('ecole')->with('graduateLevel')->with('user')->get()->toArray();
        $recherche = $request->recherche;

        $graduate2 = Graduate::whereHas('specialite', function ($query) use($recherche) {
            $query->where('lib_spec','LIKE', '%'.$recherche.'%');
        })->with('specialite')->with('ecole')->with('graduateLevel')->with('user')->get()->toArray();

        if (!empty($graduate)) {
            return view('recherche', [
                'title'=>$recherche,
                'graduates'=>$graduate,
            ]);
        }
        if (!empty($graduate2)) {
            return view('recherche', [
                'title'=>$recherche,
                'graduates'=>$graduate2,
            ]);
        }

        return view('recherche', [
            'title'=>$recherche,
            'graduates'=>[],
        ]);

    }
}
