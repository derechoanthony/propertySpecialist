<?php

namespace PropertySpecialist;

use Illuminate\Database\Eloquent\Model;

class personal_info extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'address',
        'contactNum',
        'birthDate',
        'email',
        'tin',
        'photo',
        'team',
        'lead',
        'type',
        'status',
        'created_at',
    ];
}
