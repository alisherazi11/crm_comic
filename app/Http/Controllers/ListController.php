<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ListController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users=Lists::where('type','User')->get();
        return view('admin.list',compact('users'));
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
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required|unique:lists',
        'type'=>'required',
        'password'=>'required|min:6',

        ]);
        $validateData['password']=Hash::make($request->password);
        // if($request->file('image'))
        // {
        //     $image=$request->file('image');
        //     $image_name=time().'.'.$image->getClientOriginalExtension();
        //     $image->move(public_path('images/staff'),$image_name);
        //     $validateData['image']=$image_name;
        // }
        $user=Lists::create($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'List Added Successfully'
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
        $user=Lists::find($id);
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
        $user=Lists::find($id);
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
        $user=Lists::find($request->update_id);
        $validateData=$request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required',
        'type'=>'required',
        'password'=>'',
        
        ]);
        if($request->has('new_password'))
        {
            $validateData['password']=Hash::make($request->new_password);
        }
        // if($request->file('image'))
        // {
        //     $image=$request->file('image');
        //     $image_name=time().'.'.$image->getClientOriginalExtension();
        //     $image->move(public_path('images/staff'),$image_name);
        //     $validateData['image']=$image_name;
        // }else
        // {
        //     $validateData['image']=$request->old_image;
        // }
        $user->update($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'List Added Successfully'
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
        $user=Lists::find($request->delete_id);
         $notification=array(
            'alert-type'=>'success',
            'message'=>'User Deleted Successfully'
        );
        $user->delete();
        return redirect()->back()->with($notification);
    }
    public function mass_delete(Request $request)
    {
        $ids=$request->id;
        $lists=Lists::whereIn('id',$ids);
        $lists->delete();
        echo "deleted";
    }
}
