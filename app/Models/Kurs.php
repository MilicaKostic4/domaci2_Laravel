<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurs extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazivKursa',
        'trajanje',
        'godina',
        'ocena',
        'sadrzaj',
        'cena'
    ];

    public function predavac(){
        return $this->belongsTo(Predavac::class);
    }

    public function kategorija(){
        return $this->belongsTo(Kategorija::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
