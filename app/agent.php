<?php

namespace PropertySpecialist;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
    //
     protected $fillable = [
        'fname',
        'lname',
        'contact',
        'email',
        'image',
    ];
}