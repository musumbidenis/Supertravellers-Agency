<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\User;
use App\Models\Booking;
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
        return view('client.index', ['destinations' => $destinations, 'packages' => $packages]);
    }
    public function getPackage($id)
    {
        $package = DB::select('select * from packages where package_id = ?', [$id]);
        return view('client.package', ['package' => $package]);
    }
    public function getPackageType($type)
    {
        $packages = DB::table('packages')
            ->join('destinations', 'destinations.destination_id', '=', 'packages.destination_id')
            ->select('packages.*', 'destinations.*')
            ->where('packages.package_type', '=', $type)
            ->get();
        return view('client.packages', ['packages' => $packages]);
    }
    public function getDestination(Request $request)
    {
        $destination_id = $request->destination;
        $packages = DB::table('packages')
            ->join('destinations', 'destinations.destination_id', '=', 'packages.destination_id')
            ->select('packages.*', 'destinations.*')
            ->where('destinations.destination_id', '=', $destination_id)
            ->get();
        return view('client.destination', ['packages' => $packages]);
    }
    public function book($id)
    {

        if (is_null(Auth::user())) {
            return response()->json('error');
        }

        //Save the data to database
        $booking = new Booking();
        $booking->user_id = Auth::user()->user_id;
        $booking->package_id = $id;
        $booking->status = 'pending';

        $booking->save();
            return response()->json('success');
    }

    public function bookingUpdate($id)
    {
        //Update booking status in db
        DB::update('UPDATE bookings SET status = ? where booking_id = ?', ['cancelled', $id]);

        return response()->json('success');
    }

    public function myBookings()
    {
        $user_id = Auth::user()->user_id;

        $myBookings = User::query()
            ->join('bookings', 'bookings.user_id', '=', 'users.user_id')
            ->join('packages', 'packages.package_id', '=', 'bookings.package_id')
            ->join('destinations', 'destinations.destination_id', '=', 'packages.destination_id')
            ->select('users.*', 'bookings.*', 'packages.*', 'destinations.*')
            ->where('users.user_id', '=', $user_id)
            ->where('bookings.status', '=', 'active')
            ->orWhere('bookings.status', '=', 'pending')
            ->get();

        return view('client.myBookings', ['myBookings' => $myBookings]);
    }
}
