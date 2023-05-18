<?php

namespace App\Http\Controllers;

use App\Models\Kurs;
use App\Http\Controllers\Controller;
use App\Http\Resources\KursCollection;
use Illuminate\Http\Request;

class KursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kursevi = Kurs::all();
        return new KursCollection($kursevi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kurs $kurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kurs $kurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kurs $kurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kurs_id)
    {
        $kurs = Kurs::find($kurs_id);

        $kurs->delete();
        return response()->json('Kurs je uspesno izbrisan!');
    }
}
