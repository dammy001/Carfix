<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['fullname', 'blogid', 'phonenumber', 'email', 'message'];
}
