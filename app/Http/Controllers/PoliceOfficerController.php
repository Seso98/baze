<?php

namespace App\Http\Controllers;

use App\Models\Police_officer;
use Illuminate\Http\Request;

class PoliceOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $police_officers = Police_officer::all();
        return view('Police_officers.index', compact('police_officers'));
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
     * @param  \App\Models\Police_officer  $police_officer
     * @return \Illuminate\Http\Response
     */
    public function show(Police_officer $police_officer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Police_officer  $police_officer
     * @return \Illuminate\Http\Response
     */
    public function edit(Police_officer $police_officer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Police_officer  $police_officer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Police_officer $police_officer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Police_officer  $police_officer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Police_officer $police_officer)
    {
        //
    }
}
