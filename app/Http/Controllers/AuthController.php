<?php

namespace App\Http\Controllers;

use App\Models\Sexe;
use App\Models\User;
use App\Models\Ecole;
use App\Models\Graduate;
use App\Models\Specialite;
use Illuminate\Http\Request;
use App\Models\GraduateLevel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        if (Auth::user()) {
            return redirect()->route('user.profile');
        }
        $diplomes = GraduateLevel::all();
        $ecoles = Ecole::all();
        $specialites = Specialite::all();
        $sexes = Sexe::all();
        return view('register', [
            'diplomes'=>$diplomes,
            'ecoles'=>$ecoles,
            'specialites'=>$specialites,
            'sexes'=>$sexes,
        ]);
    }

    public function store_graduate(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenoms'=>'required',
            'email'=>'required|unique:users,email',
            'date_naissance'=>'required',
            'contacte'=>'required',
            'status'=>'required',
            'cv'=>'required|mimes:pdf',
            'photo'=>'required|mimes:png,jpg,jpeg',
            'diplome'=>'required',
            'ecole'=>'required',
            'matricule'=>'required|unique:graduates,matricule',
            'specialite'=>'required',
            'password'=>'required|min:6|confirmed',
            'sexe'=>'required',
        ]);


        $user = User::create([
            'name'=>$request->nom,
            'prenoms'=>$request->prenoms,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ]);

        $cv = time().".".$request->cv->getClientOriginalExtension();
        $photo = time().".".$request->photo->getClientOriginalExtension();
        $request->cv->storeAs('cv', $cv, 'public');
        $request->photo->storeAs('photo', $photo, 'public');


        $user->graduate()->create([
            'dtenaiss_dipl'=>$request->date_naissance,
            'contact_dipl'=>$request->contacte,
            'statut_dipl'=>$request->status,
            'id_adm'=>1,
            'cv'=>$cv,
            'photo'=>$photo,
            'matricule'=>$request->matricule,
            'graduate_level_id'=>$request->diplome,
            'specialite_id'=>$request->specialite,
            'ecole_id'=>$request->ecole,
            'sexe_id'=>$request->sexe,
        ]);

        return redirect()->back()->with('success', 'Inscription éffectuée avec succès !');
    }

    public function login(){
        if (Auth::user()) {
            return redirect()->route('user.profile');
        }
        return view('login');
    }

    public function auth(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/profile');
        }else{
            return redirect()->back()->with(['error'=>'Email ou mot de passe incorrecte']);
        }
    }
}
