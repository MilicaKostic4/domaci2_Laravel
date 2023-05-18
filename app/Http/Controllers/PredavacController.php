<?php

namespace App\Http\Controllers;

use App\Models\Predavac;
use App\Http\Controllers\Controller;
use App\Http\Resources\PredavacResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PredavacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $predavac = Predavac::all();
        return $predavac;
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
        $validator = Validator::make($request->all(),[
            'ime'=>'required|string|max:255',
            'prezime'=>'required|string|max:255',
            'zanimanje'=>'required|string|max:255',
            'obrazovanje'=>'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json(['Greska prilikom kreiranja predavaca!',$validator->errors()]);
        }

        $predavac = Predavac::create([
            'ime'=>$request->ime,
            'prezime'=>$request->prezime,
            'zanimanje'=>$request->zanimanje,
            'obrazovanje'=>$request->obrazovanje
        ]);

        return response()->json(['Predavac je uspesno kreiran!', new PredavacResource($predavac)]);
    
    }

    /**
     * Display the specified resource.
     */
    public function show($predavac_id)
    {
        $predavac = Predavac::find($predavac_id);
        if(is_null($predavac)){
            return response()->json('Predavac ne postoji!', 404);
        }
        return response()->json($predavac);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Predavac $predavac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Predavac $predavac)
    {
        $validator = Validator::make($request->all(),[
            'ime'=>'required|string|max:255',
            'prezime'=>'required|string|max:255',
            'zanimanje'=>'required|string|max:255',
            'obrazovanje'=>'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json(['Greska prilikom azuriranja predavaca!',$validator->errors()]);
        }

        $predavac->ime = $request->ime;
        $predavac->prezime = $request->prezime;
        $predavac->zanimanje = $request->zanimanje;
        $predavac->obrazovanje = $request->obrazovanje;

        $predavac->save();

        return response()->json(['Predavac je uspesno azuriran!', new PredavacResource($predavac)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($predavac_id)
    {
        $predavac = Predavac::find($predavac_id);
        $predavac->delete();
        return response()->json('Predavac je uspesno izbrisan!');
    }
}
