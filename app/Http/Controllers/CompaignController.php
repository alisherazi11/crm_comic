<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Group;
use App\Models\Compaign;
use Illuminate\Http\Request;

class CompaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=Group::all();
        $agents=Agent::all();
        $compaigns=Compaign::all();
        return view('admin.compaign',compact('agents','groups','compaigns'));
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
        $validateData=$request->validate([
        'name'=>'required',
        'type'=>'required',
        'agent_id'=>'required',
        'group_id'=>'required',
        'duration'=>'required'
        ]);
        $validateData['group_name']=Group::find($request->group_id)->name;
        $validateData['agent_name']=Agent::find($request->agent_id)->type;
        Compaign::create($validateData);
                $notification=array(
            'alert-type'=>'success',
            'message'=>'Compaign Added Successfully'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request->id;
        $compaign=Compaign::find($id);
        return $compaign;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $compaign=Compaign::find($id);
        return $compaign;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $compaign=Compaign::find($request->update_id);
        $validateData=$request->validate([
        'name'=>'required',
        'type'=>'required',
        'agent_id'=>'required',
        'group_id'=>'required',
        'duration'=>'required'
        ]);
        $validateData['group_name']=Group::find($request->group_id)->name;
        $validateData['agent_name']=Agent::find($request->agent_id)->type;
        $compaign->update($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Compaign Updated Successfully'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
         $compaign=Compaign::find($request->delete_id);
         $notification=array(
            'alert-type'=>'success',
            'message'=>'Compaign Deleted Successfully'
        );
        return redirect()->back()->with($notification);
    }
    public function mass_delete(Request $request)
    {
        $ids=$request->id;
        $compaigns=Compaign::whereIn('id',$ids);
        $compaigns->delete();
        echo "deleted";
    }
}
