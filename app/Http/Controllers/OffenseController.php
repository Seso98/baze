<?php

namespace App\Http\Controllers;

use App\Models\offense;
use Illuminate\Http\Request;

class OffenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offenses = offense::all();
        return view('offenses.index', compact('offenses'));
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
     * @param  \App\Models\offense  $offense
     * @return \Illuminate\Http\Response
     */
    public function show(offense $offense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\offense  $offense
     * @return \Illuminate\Http\Response
     */
    public function edit(offense $offense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\offense  $offense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offense $offense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\offense  $offense
     * @return \Illuminate\Http\Response
     */
    public function destroy(offense $offense)
    {
        //
    }
}
