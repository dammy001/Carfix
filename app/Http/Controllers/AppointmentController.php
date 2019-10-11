<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\User;
use Auth;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        return view('appointment/appointment');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=> 'required',
            'lastname'=> 'required|max:255',
            'email'=> 'required|email|unique:users',
            'number'=> 'required|numeric',
            'address'=> 'required',
            'city'=> 'required',
            'dateofappointment' => 'required',
            'timeofappointment' => 'required',
            'vehiclename'=>'required',
            'vehiclemodel' => 'required',
            'vehicleyear' => 'required'
        ]);
            if(!Auth::user()){
                return redirect()->route('login')->with('danger', 'Please Login Before Proceeding...');
            }
            else{
                Appointment::create($request->all());
                return redirect()->route('appointment')->with('success', 'Appointment Sent Successfully... We will get in touch with you very soon.');
            }

    }

}
