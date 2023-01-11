<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
     public function index()
    {   
        $users=Group::all();
        return view('admin.group',compact('users'));
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
        //dd($request->all());
        $validateData=$request->validate([
        'name'=>'required',
       
        'type'=>'required',

        ]);
      
        $user=Group::create($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Group Added Successfully'
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
        $user=Group::find($id);
        return $user;
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
        $user=Group::find($id);
        return $user;
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
        $user=Group::find($request->update_id);
        $validateData=$request->validate([
        'name'=>'required',
        
        
        'type'=>'required',
       
        ]);

        $user->update($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Group Updated Successfully'
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
        $user=Group::find($request->delete_id);
         $notification=array(
            'alert-type'=>'success',
            'message'=>'Group Deleted Successfully'
        );
        $user->delete();
        return redirect()->back()->with($notification);
    }
    public function mass_delete(Request $request)
    {
        $ids=$request->id;
        $groups=Group::whereIn('id',$ids);
        $groups->delete();
        echo "deleted";
    }
}
