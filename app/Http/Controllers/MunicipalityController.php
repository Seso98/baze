<?php

namespace App\Http\Controllers;

use App\Models\municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipalities = municipality::all();
        return view('municipalities.index', compact('municipalities'));
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
     * @param  \App\Models\municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function show(municipality $municipality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function edit(municipality $municipality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, municipality $municipality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function destroy(municipality $municipality)
    {
        //
    }
}
