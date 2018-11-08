<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
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
     * Show the use profile.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('edit_profile');
    // }

    public function getUser()
    {   
        $user = Auth::user();
        return view('edit_profile', compact('user') );     
        // $database = User::all();
        // foreach($database as $data ){
        //     return view('edit_profile', ['data' => $data] );     
        // }
        
    }

    public function updateUser(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $mobile_number = $request->get('mobile_number');
        $city = $request->get('city');
        User::update([
                    'name' => $name,
                    'email' => $email,
                    'mobile_number' => $mobile_number,
                    'city' => $city ]);
        return view('home');

    }
        
    
}
