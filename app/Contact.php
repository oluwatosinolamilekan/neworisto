<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = ['fisrt_name','last_name','phone_number','message','email'];
}
