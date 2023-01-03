<?php

namespace App\Http\Controllers;

use App\Models\egresado;
use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Egresado.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Egresado.forme');
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
     * @param  \App\Models\egresado  $egresado
     * @return \Illuminate\Http\Response
     */
    public function show(egresado $egresado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\egresado  $egresado
     * @return \Illuminate\Http\Response
     */
    public function edit(egresado $egresado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\egresado  $egresado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, egresado $egresado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\egresado  $egresado
     * @return \Illuminate\Http\Response
     */
    public function destroy(egresado $egresado)
    {
        //
    }
}
