<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Parliament;
use Illuminate\Http\Request;

class ParliamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($request->search){
            $parliaments = Parliament::where('name','LIKE','%'.$request->search.'%')->all();
        }else{
            $parliaments = Parliament::all();
        }
        //query all parliaments from DB using Model Parliament.php
        
        //return to json
        return response()->json([
            'success' => true,
            'message' => 'Successsfully fetch all parliaments',
            'data' => $parliaments,
        ]);
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
     * @param  \App\Models\Parliament  $parliament
     * @return \Illuminate\Http\Response
     */
    public function show(Parliament $parliament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parliament  $parliament
     * @return \Illuminate\Http\Response
     */
    public function edit(Parliament $parliament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parliament  $parliament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parliament $parliament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parliament  $parliament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parliament $parliament)
    {
        //
    }
}
