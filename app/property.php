<?php

namespace PropertySpecialist;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    //
    protected $fillable = [
        'slct_offerType',
        'slct_propertyType',
        'slct_propertySubTypeHouse',
        'txt_title',
        'txtArea_description',
        'txt_bedrooms',
        'txt_bathrooms',
        'txt_totalrooms',
        'txt_flrarea',
        'txt_carspace',
        'slct_yearbuilt',
        'slct_clasification',
        'slct_fullyfurnished',
        'txt_lotarea',
        'txt_subdivisionname',
        'txt_blckunitnumber',
        'txt_com_bedrooms',
        'txt_com_bathrooms',
        'txt_com_totalrooms',
        'txt_com_flrarea',
        'txt_com_flrtotal',
        'txt_com_carspace',
        'slct_com_yearbuilt',
        'slct_com_clasification',
        'slct_com_fullyfurnished',
        'txt_com_lotarea',
        'txt_com_subdivisionname',
        'txt_com_blckunitnumber',
        'txt_lot_lotArea',
        'slct_lot_clasification',
        'txt_lot_subdivisionname',
        'txt_lot_blckunitnumber',
        'txt_price',
        'txt_objectid',
        '_token',
        'txt_youtubeurl',
        'txt_province',
        'txt_city',
        'txt_brngy',
        'txt_address'
    ];
}
