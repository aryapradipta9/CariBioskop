<?php

namespace App\Http\Controllers;

use App\studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{

    public function getStudio() {
        $studios = Studio::all();
        $response = [
          "list" => $studios
        ];
        return response ()->json($response,200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Studio::all();
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
     * @param  \App\studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function show(studio $studio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(studio $studio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studio $studio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(studio $studio)
    {
        //
    }
}
