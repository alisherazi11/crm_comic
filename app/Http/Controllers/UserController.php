<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users=User::where('role','Staff')->get();
        $users=User::all();
        return view('admin.user',compact('users'));
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

    public function addcollabrator(Request $req)
    {

        User::find($req->user)->update([
            'collaborator'=>1,
            'collaborator_status'=>$req->statuscollaborator_status
        ]);

        if(isset($req->contact_id)){
            $project_id = project_id();
            $contact_id = $req->contact_id;
            $collaborator_id = $req->user;
            
            $user = User::where("id", $collaborator_id)->first();
            if($user){
                $contact = Contact::where("id", $contact_id)->where("project_id", $project_id)->first();
                if($contact){
                    $contact->collaborator_id = $collaborator_id;
                    $contact->save();
                }
            }
        }
        



        return redirect()->back()->with(['alert-type'=>'Success', 'message'=>'Collabrator Successfully added']);
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
        'email'=>'required|unique:users',
        'role'=>'',
        'password'=>'required|min:6',

        ]);

        $validateData['password']=Hash::make($request->password);
        $validateData['role']='user';

        $user=User::create($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'User Added Successfully'
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
        $user=User::find($id);
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
        $user=User::find($id);
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
        $user=User::find($request->update_id);
        //dd($request->all());
        $validateData=$request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required',
        'role'=>'required',
        'password'=>'',

        ]);
        if($request->has('new_password'))
        {
            $validateData['password']=Hash::make($request->new_password);
        }
        if($request->file('image'))
        {
            $image=$request->file('image');
            $image_name=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/staff'),$image_name);
            $validateData['image']=$image_name;
        }else
        {
            $validateData['image']=$request->old_image;
        }
        $user->update($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'User Updated Successfully'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id='',Request $request)
    {

        if($request->ajax()){
            $request["delete_id"] = $id;
        }

        $user=User::find($request->delete_id);
         $notification=array(
            'alert-type'=>'success',
            'message'=>'User Deleted Successfully'
        );
        $user->delete();
        if($request->ajax()){
            return true;
        }

        return redirect()->back()->with($notification);
    }
    public function mass_delete(Request $request)
    {
        $ids=$request->id;
        $users=User::whereIn('id',$ids);
        $users->delete();
        echo "deleted";
    }
    public function checkeduser($id)
    {
        $users=User::where('id',$id)->first();
        // dd($users);
        if($users->status == 0){
            $users->status = 1;
        }
        else{
            $users->status = 0;
        }
        $users->save();
        return $users;
    }
    function editprofile($id){
        $users=User::where('id',$id)->first();
        // dd($users);
        if($users->edit_profile == 0){
            $users->edit_profile = 1;
        }
        else{
            $users->edit_profile = 0;
        }
        $users->save();
        return $users;
    }
    function dialinfo($id){
        $users=User::where('id',$id)->first();
        // dd($users);
        if($users->edit_dialing_info == 0){
            $users->edit_dialing_info = 1;
        }
        else{
            $users->edit_dialing_info = 0;
        }
        $users->save();
        return $users;
    }
    function allowswitch($id){
        $users=User::where('id',$id)->first();
        // dd($users);
        if($users->allow_switching == 0){
            $users->allow_switching = 1;
        }
        else{
            $users->allow_switching = 0;
        }
        $users->save();
        return $users;
    }
    function mystats($id){
        $users=User::where('id',$id)->first();
        // dd($users);
        if($users->my_stats_page == 0){
            $users->my_stats_page = 1;
        }
        else{
            $users->my_stats_page = 0;
        }
        $users->save();
        return $users;
    }
    function changeproject($id){
        $users=User::where('id',$id)->first();
        $user->current_project = $id;
        $users->save();
        return $users;
    }

    public function addUser(Request $request){

    }
}
