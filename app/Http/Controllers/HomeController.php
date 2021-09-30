<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $districts = District::simplePaginate(10);

        $group = DB::table('sub_districts')
        ->join('districts', 'sub_districts.district_id', '=', 'districts.id')
        ->join('states', 'districts.state_id', '=', 'states.id')
        ->select('sub_districts.*')
        ->get()
        ->groupBy(['states.name', 'district_id']);

        // dd($group);

        return view('home', compact('districts'));
    }

    public function showToken()
    {
        return view('token');
    }

    public function adminHome()
    {
        return view('admin.home');
    }

}
