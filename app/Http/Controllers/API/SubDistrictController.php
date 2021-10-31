<?php

namespace App\Http\Controllers\API;
use App\Models\District;
use App\Models\SubDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubDistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $subdistricts = SubDistrict::where('type','LIKE','%'.$request->search.'%')->all();
        }else{
            $subdistricts = SubDistrict::all();
        }
        //query all subdistricts from DB using Model SubDistrict.php
        
        //return to json
        return response()->json([
            'success' => true,
            'message' => 'Successsfully fetch all subdistricts',
            'data' => $subdistricts,
        ]);
    }

    public function nameById(Request $request)
    {
        $subdistrict = Subdistrict::find($request->id)->value('name');
        
        //return to json
        return response()->json([
            'success' => true,
            'message' => 'Successsfully fetch subdistrict name',
            'data' => $subdistrict,
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
     * @param  \App\Models\SubDistrict  $subDistrict
     * @return \Illuminate\Http\Response
     */
    public function show(SubDistrict $subDistrict)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubDistrict  $subDistrict
     * @return \Illuminate\Http\Response
     */
    public function edit(SubDistrict $subDistrict)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubDistrict  $subDistrict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubDistrict $subDistrict)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubDistrict  $subDistrict
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubDistrict $subDistrict)
    {
        //
    }
}
