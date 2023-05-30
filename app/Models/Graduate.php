<?php

namespace App\Models;

use App\Models\Sexe;
use App\Models\User;
use App\Models\Ecole;
use App\Models\Specialite;
use App\Models\GraduateLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Graduate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function specialite(){
        return $this->belongsTo(Specialite::class);
    }
    public function ecole(){
        return $this->belongsTo(Ecole::class);
    }
    public function graduateLevel(){
        return $this->belongsTo(GraduateLevel::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sexe(){
        return $this->belongsTo(Sexe::class);
    }
}
