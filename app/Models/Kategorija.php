<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazivKategorije'
    ];

    public function kurs(){
        return $this->hasMany(Kurs::class);
    }
}
