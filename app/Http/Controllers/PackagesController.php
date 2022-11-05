<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.allPackages');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = DB::select('select * from destinations');
        return view('admin.newPackage', ['destinations' => $destinations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the form input fields
        $validator = Validator::make($request->all(), [
            'package_name' => 'required',
            'package_type' => 'required',
            'destination' => 'required',
            'amount' => 'required|numeric',
            'description' => 'required',
            'image_url' => 'required',
        ]);

        //Alert the user of the input error
        if ($validator->fails()) {
            return back()
                ->with('toast_error', $validator->messages()->all()[0])
                ->withInput();
        } else {
            $image =  $request->file('image_url');
            $image_name = $image->getClientOriginalName();

            $destination = 'images';

            $image->move(public_path($destination), $image_name);

            //Save the input data to database
            $package = new Package();
            $package->package_name = $request->package_name;
            $package->package_type = $request->package_type;
            $package->destination_id = $request->destination;
            $package->amount = $request->amount;
            $package->description = $request->description;
            $package->image_url = $image_name;

            $package->save();

            return back()->withSuccess('New Package Created Successfully!');
        }
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
