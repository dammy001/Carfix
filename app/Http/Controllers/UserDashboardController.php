<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function UserDashboard(){
        return view('userdashboard/dashboard');
    }
}
