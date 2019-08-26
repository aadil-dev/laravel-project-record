<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Records;


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
        $users = Auth::user();
        $records = Records::all();
        if($users->record_id){
            return view('create_profile', compact('records' , 'users'));
        }else{
            return view('home');
        }
    }
}
