<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Deal;
use App\Models\User;
use App\Models\Agent;
use Illuminate\Http\Request;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $agents=Agent::all();
        $today= Carbon::now();
        //dd($today);
        $date=  Carbon::today()->subDays(30);
        $todays=Deal::where('created_at','<=',$today)->get();
        //dd($todays);
        $news=Deal::where('created_at','>=',$date)->get();

        $users=User::all();
        return view('admin.deal',compact('agents','users','todays','news'));
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
          'price'=>'required',
          'commision'=>'',
          'close_date'=>'required',
          'team_split'=>'',
          'agent_split'=>'',
          'team'=>'required',
          'people'=>'required',
          'zip_code'=>''

        ]);
        $validateData['user_id']=auth()->user()->id;
        $deal=Deal::create($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Deal added'
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
