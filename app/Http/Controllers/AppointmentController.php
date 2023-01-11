<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calendar(Request $request)
    {
        return view('staff.calendar');
    }
    public function index()
    {
        $appointments=Appointment::where('user_id',auth()->user()->id)->get();
        return view('staff.appointment',compact('appointments'));
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
       'title'=>'required',
       'description'=>'required',
       'type'=>'required',
       'outcome'=>'required',
       'time_from'=>'required',
       'time_to'=>'',
       'price'=>'',
       'date_from'=>'required',
       'date_to'=>'required',
       'all_day'=>'required',
       'location'=>'required'
        ]);
        $validateData['user_id']=auth()->user()->id;
        $Appointment=Appointment::create($validateData);
         $notification=array(
            'alert-type'=>'success',
            'message'=>'Appointment Created!'
        );
        return redirect()->back()->with($notification);
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
    public function edit(Request $request)
    {
        $appointment=Appointment::find($request->id);
        return $appointment;
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
        $appointment=Appointment::find($request->id);
        $appointment->update($request->all());
                $notification=array(
            'alert-type'=>'success',
            'message'=>'Appointment Updated Successfully'
        );
        return redirect()->back()->with($notification);
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
