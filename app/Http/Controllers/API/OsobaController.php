<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OsobaResource;
use App\Models\Osoba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OsobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OsobaResource::collection(Osoba::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function show(Osoba $osoba)
    {
        return new OsobaResource($osoba);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function edit(Osoba $osoba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Osoba $osoba)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'prezime' => 'required|string',
            'tip' => 'required|string',
            'email' => 'required|email',
            'broj_telefona' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $osoba->ime = $request->ime;
        $osoba->prezime = $request->prezime;
        $osoba->tip = $request->tip;
        $osoba->email = $request->email;
        $osoba->broj_telefona = $request->broj_telefona;
        $osoba->save();

        return response()->json([
            'Poruka' => 'Osoba je izmenjena u bazi podataka',
            'Osoba' => new OsobaResource($osoba)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Osoba $osoba)
    {
        //
    }
}
