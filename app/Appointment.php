<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'number', 'address', 'city', 'dateofappointment', 'timeofappointment', 'vehiclename', 'vehiclemodel', 'vehicleyear'];
}
