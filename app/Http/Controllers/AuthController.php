<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Register a user
     */
    public function register(Request $request)
    {
        //Validate the form input fields
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
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
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->role = 'customer';

            $user->save();

            return redirect('/login')->withSuccess('Account Created Successfully!');
        }
    }

    /**
     * Login a user
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $role = Auth::user()->role;

            switch ($role) {
                case 'admin':
                    return redirect('/dashboard')->with('toast_success', 'Signed in');
                    break;
                case 'receptionist':
                    return redirect('/dashboard')->with('toast_success', 'Signed in');
                    break;
                case 'customer':
                    return redirect('/')->with('toast_success', 'Signed in');
                    break;

                default:
                    return back()->with('toast_error', 'Error occurred');
                    break;
            }
        }

        return redirect('/login')->with('toast_error', 'Login credentials are not valid');
    }

    /**
     * Logout user
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}
