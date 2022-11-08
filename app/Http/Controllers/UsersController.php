<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.allUsers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newUser');
    }
    public function export($ids)
    {
        
        $id = json_decode($ids,true);

        $markers = array_fill(0, count($id), '?');
        $sql = "SELECT * FROM users WHERE id IN (".implode(',', $markers).")";
        $data = DB::select($sql, $id);

        $pdf = PDF::loadView('pages.pdf.users',['data'=>$data])->setPaper('a4', 'portrait');
        
        return $pdf->download('example.pdf');
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
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'role' => 'required|in:administrator,receptionist',
        ]);

        //Alert the user of the input error
        if ($validator->fails()) {
            return back()
                ->with('toast_error', $validator->messages()->all()[0])
                ->withInput($request->except('password'));
        } else {

            //Save the input data to database
            $user = new User();
            $user->first_name = $request->first_name;
            $user->surname = $request->surname;
            $user->email = $request->email;
            $user->email = $request->phone;
            $user->password = $request->password;
            $user->role = $request->role;

            $user->save();

            return back()->withSuccess('New User Created Successfully!');
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
        User::where('user_id', $id)->delete();

        return response()->json('success');
    }
}
