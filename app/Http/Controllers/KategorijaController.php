<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use App\Http\Controllers\Controller;
use App\Http\Resources\KategorijaCollection;
use App\Http\Resources\KategorijaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategorije = Kategorija::all();
        //return KategorijaResource::collection($kategorije);
        return new KategorijaCollection($kategorije);
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
            'nazivKategorije'=>'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json(['Greska prilikom kreiranja kategorije!',$validator->errors()]);
        }

        $kategorija = Kategorija::create([
            'nazivKategorije'=>$request->nazivKategorije,
        ]);

        return response()->json(['Kategorija je uspesno kreirana!', new KategorijaResource($kategorija)]);
    }

    /**
     * Display the specified resource.
     */
    public function show($kategorija_id)
    {
        $kategorija = Kategorija::find($kategorija_id);
        if(is_null($kategorija)){
            return response()->json('Kategorija ne postoji!', 404);
        }
        return response()->json($kategorija);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategorija $kategorija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($kategorija_id, Request $request)
    {
        /*
        $validator = Validator::make($request->all(),[
            'nazivKategorije'=>'required|string|max:255'
        ]);

        if($validator->fails()){
            return response()->json(['Greska prilikom azuriranja kategorije!',$validator->errors()]);
        }

        $kategorija = Kategorija::find($kategorija_id);
        $kategorija->nazivKategorije=$request->nazivKategorije;

        $kategorija->save();

       return response()->json(['Kategorija je uspesno azurirana!', new KategorijaResource($kategorija)]);
       */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kategorija_id)
    {
        /*
        $kategorija = Kategorija::find($kategorija_id);
        $kategorija->delete();
        return response()->json('Kategorija je uspesno izbrisana!');
        */
    }
}
