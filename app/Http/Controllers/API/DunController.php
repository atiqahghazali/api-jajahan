<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Dun;
use Illuminate\Http\Request;

class DunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($request->search){
            $duns = Dun::where('name','LIKE','%'.$request->search.'%')->all();
        }else{
            $duns = Dun::all();
        }
        //query all duns from DB using Model Dun.php
        
        //return to json
        return response()->json([
            'success' => true,
            'message' => 'Successsfully fetch all duns',
            'data' => $duns,
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
     * @param  \App\Models\Dun  $dun
     * @return \Illuminate\Http\Response
     */
    public function show(Dun $dun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dun  $dun
     * @return \Illuminate\Http\Response
     */
    public function edit(Dun $dun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dun  $dun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dun $dun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dun  $dun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dun $dun)
    {
        //
    }
}
