<?php

namespace App\Models;

use App\Models\Graduate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ecole extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function graduates(){
        return $this->hasMany(Graduate::class);
    }
}
