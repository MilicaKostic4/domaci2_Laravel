<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predavac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'zanimanje',
        'obrazovanje'
    ];

    public function kurs(){
        return $this->hasMany(Kurs::class);
    }

}
