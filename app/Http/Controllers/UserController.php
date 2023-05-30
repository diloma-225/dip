<?php

namespace App\Http\Controllers;

use App\Models\Sexe;
use App\Models\User;
use App\Models\Ecole;
use App\Models\Specialite;
use Illuminate\Http\Request;
use App\Models\GraduateLevel;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index(){
        return view('user.profile');
    }

    public function edit(){

        $diplomes = GraduateLevel::all();
        $ecoles = Ecole::all();
        $specialites = Specialite::all();
        $sexes = Sexe::all();

        return view('user.edit', [
            'diplomes'=>$diplomes,
            'ecoles'=>$ecoles,
            'specialites'=>$specialites,
            'sexes'=>$sexes,
        ]);
    }

    public function update(User $user, Request $request){
        $request->validate([
            'nom'=>'required',
            'prenoms'=>'required',
            'email'=>'required',
            'date_naissance'=>'required',
            'contacte'=>'required',
            'status'=>'required',
            'diplome'=>'required',
            'ecole'=>'required',
            'specialite'=>'required',
            'sexe'=>'required',
        ]);

        $user->update([
            'nom'=>$request->name,
            'prenoms'=>$request->prenoms,
            'email'=>$request->email
        ]);

        $user->graduate->update([
            'dtenaiss_dipl'=>$request->date_naissance,
            'contact_dipl'=>$request->contacte,
            'statut_dipl'=>$request->status,
            'id_adm'=>1,
            'graduate_level_id'=>$request->diplome,
            'specialite_id'=>$request->specialite,
            'ecole_id'=>$request->ecole,
            'sexe_id'=>$request->sexe,
        ]);


        return redirect()->back()->with('success', 'Modification éffectuée  avec succès !');
    }

    public function updatePassword(User $user, Request $request){
        $request->validate([
            'password'=>'required|min:6|confirmed'
        ]);

        $user->update([
            'password'=>Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Modification éffectuée  avec succès !');

    }

    public function updateImageCV(User $user, Request $request){
        $request->validate([
            'cv'=>'mimes:pdf',
            'photo'=>'mimes:png,jpg,jpeg',
        ]);



        if (!empty($request->cv)) {
            if (Storage::disk('public')->exists('cv/'.$user->graduate->cv)) {
                Storage::disk('public')->delete('cv/'.$user->graduate->cv);
            }

            $cv = time().".".$request->cv->getClientOriginalExtension();
            $request->cv->storeAs('cv', $cv, 'public');
            $user->graduate->update([
                'cv'=>$cv
            ]);


        }

        if (!empty($request->photo)) {
            if (Storage::disk('public')->exists('photo/'.$user->graduate->photo)) {
                Storage::disk('public')->delete('photo/'.$user->graduate->photo);
            }
            $photo = time().".".$request->photo->getClientOriginalExtension();
            $request->photo->storeAs('photo', $photo, 'public');
            $user->graduate->update([
                'photo'=>$photo,
            ]);
        }


        return redirect()->back()->with('success', 'Modification éffectuée  avec succès !');

    }

    public function logout(Request $request){
        $request->session()->flush();

        Auth::logout();

        return redirect('/login');
    }

}
