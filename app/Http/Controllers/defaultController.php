<?php

namespace PropertySpecialist\Http\Controllers;

use Illuminate\Http\Request;
use PropertySpecialist\property;
use PropertySpecialist\agent;
use Illuminate\Support\Facades\Validator;

class defaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = property::select('id', '_token', 'txt_title','slct_offerType', 'txt_address','txt_price', 'txt_flrarea', 'txt_lotarea','txt_bedrooms', 'txt_bathrooms', 'txt_carspace')
            ->paginate(5);
        return view( 'default', ['data' => $property]);
    }
    public function buypage()
    {
        $property = property::select('id', '_token', 'txt_title','slct_offerType', 'txt_address','txt_price', 'txt_flrarea', 'txt_lotarea','txt_bedrooms', 'txt_bathrooms', 'txt_carspace')
            ->paginate(5);
        return view( 'listBuy', ['data' => $property]);
    }
    public function rentpage()
    {
        $property = property::select('id', '_token', 'txt_title','slct_offerType', 'txt_address','txt_price', 'txt_flrarea', 'txt_lotarea','txt_bedrooms', 'txt_bathrooms', 'txt_carspace')
            ->paginate(5);
        return view( 'listRent', ['data' => $property]);
    }
    public function teampage(){
        $agents = agent::select('id', 'fname', 'lname', 'image', 'contact', 'email', 'created_at')
            ->paginate(5);
        return view('team', ['data' => $agents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
