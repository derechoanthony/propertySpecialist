<?php

namespace PropertySpecialist\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PropertySpecialist\agent;

class CreateAgentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = agent::select('id','fname', 'lname','image', 'contact', 'email', 'created_at')
        ->paginate(5);
        return view('agent', ['data' => $agents]);
        // return view('agent');
    }

    public function preview($id)
    {
        $agentData = agent::find($id);
        return view('agentList', ['data' => $agentData]);
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
     * validate data input
     *
     * @param Request $request
     * @return void
     */
    public function validationform(Request $request){
        $data = array();

        $data['fname'] = 'required|min:3|max:50';
        $data['lname'] = 'required|min:3|max:50';
        $data['contact'] = 'required';
        $data['email'] = 'required|email';

        $this->validate($request,$data);

        $new_route = $this->storeData('entry', $request);
        return redirect()->to($new_route);
    }
    public function updateValidationform(Request $request){
        $data = array();

        $data['fname'] = 'required|min:3|max:50';
        $data['lname'] = 'required|min:3|max:50';
        $data['contact'] = 'required';
        $data['email'] = 'required|email';

        $this->validate($request,$data);

        $new_route = $this->storeData('update', $request);
        return redirect()->to($new_route);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeData($type ,Request $request)
    {
        if($type === 'entry'){
            $agent = new agent();
        }else{
            $agent = agent::find($request->id);
        }
        $path =explode('/',$request->file_propertyimage->store('public/imageUpload'));
        $agent->fname =  $request->fname;
        $agent->lname =  $request->lname;
        $agent->contact =  $request->contact;
        $agent->email =  $request->email;
        $agent->image = $path[2];
        $agent->save();

        return '/agent';
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
        $agentData = agent::find($id);
        return view('agentUpdate', ['data' => $agentData]);
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
        $property = agent::find($id);
        $property->delete($property->id);
        return redirect()->back();
    }
}
