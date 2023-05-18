<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\KursCollection;
use App\Models\Kurs;

class KursKategorijaController extends Controller
{
    public function index($kategorija_id)
    {
        $kurs = Kurs::get()->where('kategorija_id', $kategorija_id);
        if(is_null($kurs)){
            return response()->json('Ne postoji nijedan kurs u datoj kategoriji!', 404);
        }
        return response()->json(new KursCollection($kurs));
    }
}
