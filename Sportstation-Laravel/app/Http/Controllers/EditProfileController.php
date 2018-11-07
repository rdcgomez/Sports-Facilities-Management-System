<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

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
        $datas = User::all();
        foreach($datas as $data ){
            return view('edit_profile', ['data' => $data] );     
        }
        
    }
}
