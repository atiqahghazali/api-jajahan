<?php

namespace App\Http\Controllers\Admin;

use App\Models\State;
use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::all();
        $states = State::all();
        return view('admin.district.index', compact('districts','states'));
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
            'id' => 'unique:districts',
        ]);

        $district = District::create([
            'id' => $request->id,
            'name' => $request->name,
            'code_3'=> $request->code,
            'state_id' => $request->state
        ]);

        return redirect()->route('district-index')
                        ->with('success','District created successfully');
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
    public function update(Request $request, District $district)
    {
        $district->update([
            'name' => $request->name,
            'code_3'=> $request->code,
            'state_id' => $request->state
        ]);

        return redirect()->route('district-index')
                        ->with('success','District updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        $district->delete();

        return redirect()->route('district-index')
                        ->with('success','District deleted successfully');
    }
}
