<?php

namespace PropertySpecialist;

use Illuminate\Database\Eloquent\Model;

class lot_property extends Model
{
    //
     protected $fillable = [
        'lot_lotArea','lot_clasification','lot_subdivisionname','lot_blckunitnumber'
    ];
}
