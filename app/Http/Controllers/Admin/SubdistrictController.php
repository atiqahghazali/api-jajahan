<?php

namespace App\Http\Controllers\Admin;

use App\Models\District;
use App\Models\SubDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubdistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::all();
        $subdistricts= SubDistrict::all();

        return view('admin.subdistrict.index', compact('districts','subdistricts'));
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
        $validated = $request->validate([
            'id' => 'unique:sub_districts',
        ]);

        $subdistrict = SubDistrict::create([
            'id' => $request->id,
            'name' => $request->name,
            'district_id' => $request->district
        ]);

        return redirect()->route('subdistrict-index')
                        ->with('success','SubDistrict created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubDistrict $subdistrict)
    {
        $subdistrict->update([
            'name' => $request->name,
            'district_id' => $request->district
        ]);

        return redirect()->route('subdistrict-index')
                        ->with('success','SubDistrict updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubDistrict $subdistrict)
    {
        $subdistrict->delete();

        return redirect()->route('subdistrict-index')
                        ->with('success','SubDistrict deleted successfully');
    }
}
