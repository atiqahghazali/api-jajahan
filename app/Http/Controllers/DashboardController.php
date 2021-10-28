<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function showDocs()
    {
        return view('docs');
    }

    public function showData()
    {
        $districts = District::simplePaginate(10);

        $group = DB::table('sub_districts')
        ->join('districts', 'sub_districts.district_id', '=', 'districts.id')
        ->join('states', 'districts.state_id', '=', 'states.id')
        ->select('sub_districts.*')
        ->get()
        ->groupBy(['states.name', 'district_id']);

        return view('data', compact('districts'));
    }
}
