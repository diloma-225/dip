<?php

namespace App\Http\Controllers;

use App\Models\Graduate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function une(){
        return view('une');
    }
    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }

    public function uneDetails(Request $request){
        $title = $request->une;
        return view('une-details', compact('title'));
    }

    public function profile_view(Request $request){
        $graduate = Graduate::find($request->profile);
        return view('profile.index', compact('graduate'));
    }
}
