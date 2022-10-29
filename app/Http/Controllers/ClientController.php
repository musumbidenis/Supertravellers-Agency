<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Package;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $packages = DB::table('packages')
            ->join('destinations', 'destinations.destination_id', '=', 'packages.destination_id')
            ->select('packages.*', 'destinations.*')
            ->get();
        $destinations = DB::select('select * from destinations');
        return view('client.index', ['destinations' => $destinations,'packages' => $packages]);
    }
}
