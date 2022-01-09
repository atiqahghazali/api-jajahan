<?php

namespace App\Http\Controllers\API;

use App\Models\SubDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        
        $subdistrict = SubDistrict::find($request->search);
        $subdistrict_name = $subdistrict->name;
        $district_name = $subdistrict->district->name;
        $state_name = $subdistrict->district->state->name;

        $address = $subdistrict_name.', '.$district_name.', '.$state_name;
    
        //return to json
        return response()->json([
            'success' => true,
            'message' => 'Successsfully fetch semi address',
            'data' => $address,
        ]);
    }
}
