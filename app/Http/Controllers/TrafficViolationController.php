<?php

namespace App\Http\Controllers;

use App\Models\Traffic_violation;
use Illuminate\Http\Request;

class TrafficViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traffic_violations = Traffic_violation::all();
        return view('traffic_violations.index', compact('traffic_violations'));
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
     * @param  \App\Models\Traffic_violation  $traffic_violation
     * @return \Illuminate\Http\Response
     */
    public function show(Traffic_violation $traffic_violation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Traffic_violation  $traffic_violation
     * @return \Illuminate\Http\Response
     */
    public function edit(Traffic_violation $traffic_violation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Traffic_violation  $traffic_violation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traffic_violation $traffic_violation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Traffic_violation  $traffic_violation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traffic_violation $traffic_violation)
    {
        //
    }
}
