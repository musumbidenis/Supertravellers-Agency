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
    public function getPackage($id)
    {
        $package = DB::select('select * from packages where package_id = ?', [$id]);
        return view('client.package',['package'=>$package]);
    }
    public function getPackageType($type)
    {
        $packages = DB::table('packages')
            ->join('destinations', 'destinations.destination_id', '=', 'packages.destination_id')
            ->select('packages.*', 'destinations.*')
            ->where('packages.package_type', '=', $type)
            ->get();
        return view('client.packages',['packages'=>$packages]);
    }
    public function getDestination(Request $request)
    {
        $destination_id = $request->destination;
        $packages = DB::table('packages')
            ->join('destinations', 'destinations.destination_id', '=', 'packages.destination_id')
            ->select('packages.*', 'destinations.*')
            ->where('destinations.destination_id', '=', $destination_id)
            ->get();
        return view('client.destination',['packages'=>$packages]);
    }
}
