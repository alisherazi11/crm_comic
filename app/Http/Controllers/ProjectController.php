<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $projects=Project::where('user_id',auth()->user()->id)->get();
        $projects = Project::all();
        return view('admin.project',compact('projects'));
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
            'title'=>'required'
        ]);
        $project=Project::create([
            'title'=>$request->title,
            'user_id'=>auth()->user()->id
        ]);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Project Created Successfully'
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
        $project=Project::findOrFail($request->id);
        return $project;
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
      $project=Project::findOrFail($request->update_id);
      $project->update([
        'title'=>$request->title,
        'description'=>$request->description,
        'date'=>$request->date,
        'type'=>$request->type,
        
      ]);
    //   $notification=array(
    //         'alert-type'=>'success',
    //         'message'=>'Project Updated Successfully'
    //     );
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->delete_id;
        $project=Project::findOrFail($id);
        $project->delete();
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Project Deleted Successfully'
        );
        return redirect()->back()->with($notification);
    }
}
