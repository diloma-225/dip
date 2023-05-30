<?php

use App\Models\Ecole;
use App\Models\Specialite;
use Illuminate\Http\Request;
use App\Models\GraduateLevel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/à-la-une', [HomeController::class, 'une'])->name('une');
Route::get('/à-propos', [HomeController::class, 'about'])->name('about');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('/recherche', [RechercheController::class, 'index'])->name('recherche');
Route::post('/recherche', [RechercheController::class, 'results'])->name('recherche.results');
Route::get('/profile/{profile}', [HomeController::class, 'profile_view'])->name('profile.view');
Route::get('/à-la-une/{une}', [HomeController::class, 'uneDetails'])->name('une.details');

Route::get('/inscription', [AuthController::class, 'register'])->name('register');
Route::post('/inscription', [AuthController::class, 'store_graduate'])->name('graduate.store');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('login.auth');

/* Route::get('/dashboard', function(){
    return view('dashboard');
}); */
Route::get('/add-students', function(){
    $diplomes = GraduateLevel::all();
    $ecoles = Ecole::all();
    $specialites = Specialite::all();
    return view('dashboard.add-students', [
        'diplomes'=>$diplomes,
        'ecoles'=>$ecoles,
        'specialites'=>$specialites,
    ]);
});

Route::middleware('auth')->group(function(){
    Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('/user/profile/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/profile/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::post('/user/profile/update/password/{user}', [UserController::class, 'updatePassword'])->name('user.update.password');
    Route::post('/user/profile/update/cv-photo/{user}', [UserController::class, 'updateImageCV'])->name('user.update.cv-photo');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
