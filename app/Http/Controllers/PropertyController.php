<?php

namespace PropertySpecialist\Http\Controllers;

use Illuminate\Http\Request;
use PropertySpecialist\property;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    //
    public function entry()
    {
        return view('propertyEntry');
    }
    public function preview($id)
    {
        $property = property::find($id);
        return view('propertyPreview',['property'=>$property]);
    }
    public function updateproperty($id){
        $property = property::find($id);
        return view('propertyPreview', ['property' => $property]);
    }
    public function delete($id){
        $property = property::find($id);
        $property->delete($property->id);
        return redirect()->back();
    }
    public function list()
    {
        $property = property::select('id','slct_offerType', 'slct_propertyType', 'slct_propertySubTypeHouse', 'txt_title', 'txt_province', 'txt_city')
        ->paginate(5);
        return view('propertyList', ['data' => $property]);
    }
    public function updateExistingProperty(Request $request){
        $data = array();
        $insert = array();
        $property_type = $request['slct_propertyType'];
        $data['slct_offerType'] = 'required|string|max:255';

        $data['slct_propertyType'] = 'required|string|max:255';
        $data['txt_title'] = 'required|string|max:255';
        $data['txtArea_description'] = 'required|string|max:255';
        switch ($property_type) {
            case 'lot':
                # code...
                $data['slct_propertySubTypeLot'] = 'required|string|max:255';
                break;
            case 'commercial':
                # code...
                $data['slct_propertySubTypeCommercial'] = 'required|string|max:255';
                break;
            default:
                # code...
                $data['slct_propertySubTypeHouse'] = 'required|string|max:255';
                break;
        }
        $data['txt_price'] = 'required|integer';
        $data['txt_province'] = 'required|string|max:255';
        $data['txt_city'] = 'required|string|max:255';
        $this->validate($request, $data);

        $new_route = $this->storedata('update', $request);
        return redirect()->to($new_route);
    }
    public function validateform(Request $request){
        $data = array();
        $insert = array();
        $property_type = $request['slct_propertyType'];
        $data['slct_offerType'] = 'required|string|max:255';

        $data['slct_propertyType'] = 'required|string|max:255';
        $data['txt_title'] = 'required|string|max:255';
        $data['txtArea_description'] = 'required|string|max:255';
        switch ($property_type) {
            case 'lot':
                # code...
                $data['slct_propertySubTypeLot'] = 'required|string|max:255';
                break;
            case 'commercial':
                # code...
                $data['slct_propertySubTypeCommercial'] = 'required|string|max:255';
                break;
            default:
                # code...
                $data['slct_propertySubTypeHouse'] = 'required|string|max:255';
                break;
        }
        $data['txt_price'] = 'required|integer';
        $data['txt_province'] = 'required|string|max:255';
        $data['txt_city'] = 'required|string|max:255';
        $this->validate($request,$data);

        $new_route = $this->storedata('entry',$request);
        return redirect()->to($new_route);

   }
   private function storedata($type,$request){
        
        
        if($type=="entry"){
            $property = new property;
        } else {
            $property = property::find($request->id);
        }
            $path =explode('/',$request->file('file_propertyimage')->store('public/imageUpload'));
            $property->slct_offerType = $request->slct_offerType;
            $property->slct_propertyType = $request->slct_propertyType;
            
            $property->slct_propertySubTypeHouse = $request->slct_propertySubTypeHouse;
            $property->slct_propertySubTypeLot = $request->slct_propertySubTypeLot;
            $property->slct_propertySubTypeCommercial = $request->slct_propertySubTypeCommercial;

            $property->txt_title = $request->txt_title;
            $property->txtArea_description = $request->txtArea_description;
            $property->txt_bedrooms = ($request->txt_bedrooms == "")  ? "0" : $request->txt_bedrooms;
            $property->txt_bathrooms = ($request->txt_bathrooms == "")  ? "0" : $request->txt_bathrooms;
            $property->txt_totalrooms = ($request->txt_totalrooms == "")  ? "0" : $request->txt_totalrooms;
            $property->txt_flrarea = ($request->txt_flrarea == "")  ? "0" : $request->txt_flrarea;
            $property->txt_carspace = ($request->txt_carspace == "")  ? "0" : $request->txt_carspace;
            $property->slct_yearbuilt = $request->slct_yearbuilt;
            $property->slct_clasification = $request->slct_clasification;
            $property->slct_fullyfurnished = $request->slct_fullyfurnished;
            $property->txt_lotarea = ($request->txt_lotarea == "")  ? "0" : $request->txt_lotarea;
            $property->txt_subdivisionname = $request->txt_subdivisionname;
            $property->txt_blckunitnumber = ($request->txt_blckunitnumber == "")  ? "0" : $request->txt_blckunitnumber;
            $property->txt_com_bedrooms = ($request->txt_com_bedrooms == "")  ? "0" : $request->txt_com_bedrooms;
            $property->txt_com_bathrooms = ($request->txt_com_bathrooms == "")  ? "0" : $request->txt_com_bathrooms;
            $property->txt_com_totalrooms = ($request->txt_com_totalrooms == "")  ? "0" : $request->txt_com_totalrooms;
            $property->txt_com_flrarea = ($request->txt_com_flrarea == "")  ? "0" : $request->txt_com_flrarea;
            $property->txt_com_flrtotal = ($request->txt_com_flrtotal == "")  ? "0" : $request->txt_com_flrtotal;
            $property->txt_com_carspace = ($request->txt_com_carspace == "")  ? "0" : $request->txt_com_carspace;
            $property->slct_com_yearbuilt = $request->slct_com_yearbuilt;
            
            $property->slct_com_clasification = $request->slct_com_clasification;
            $property->slct_com_fullyfurnished = $request->slct_com_fullyfurnished;
            $property->txt_com_lotarea = ($request->txt_com_lotarea == "")  ? "0" : $request->txt_com_lotarea;
            $property->txt_com_subdivisionname = $request->txt_com_subdivisionname;
            $property->txt_com_blckunitnumber = $request->txt_com_blckunitnumber;
            $property->txt_lot_lotArea = ($request->txt_lot_lotArea == "")  ? "0" : $request->txt_lot_lotArea;
            $property->slct_lot_clasification = $request->slct_lot_clasification;
            $property->txt_lot_subdivisionname = $request->txt_lot_subdivisionname;
            $property->txt_lot_blckunitnumber = ($request->txt_lot_blckunitnumber == "")  ? "0" : $request->txt_lot_blckunitnumber;;

            $property->txt_price = $request->txt_price;
            $property->txt_objectid = $request->txt_objectid;
            $property->_token = $path[2];
            $property->_orig_token = $request->_token;
            $property->txt_youtubeurl = $request->txt_youtubeurl;
            $property->txt_province = $request->txt_province;
            $property->txt_city = $request->txt_city;
            $property->txt_brngy = $request->txt_brngy;
            $property->txt_address = $request->txt_address;
            $property->save();
            $id = $property->id;
            $route = '/preview/'.$id.'/property';
       
        return $route;

   }
}
