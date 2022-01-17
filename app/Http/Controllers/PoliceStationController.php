<?php

namespace App\Http\Controllers;

use App\Models\Police_station;
use Illuminate\Http\Request;

class PoliceStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $police_stations = Police_station::all();
        return view('Police_stations.index', compact('police_stations'));
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
     * @param  \App\Models\Police_station  $police_station
     * @return \Illuminate\Http\Response
     */
    public function show(Police_station $police_station)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Police_station  $police_station
     * @return \Illuminate\Http\Response
     */
    public function edit(Police_station $police_station)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Police_station  $police_station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Police_station $police_station)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Police_station  $police_station
     * @return \Illuminate\Http\Response
     */
    public function destroy(Police_station $police_station)
    {
        //
    }
}
