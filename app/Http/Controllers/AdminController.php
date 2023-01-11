<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Deal;
use App\Models\User;
use App\Models\Agent;
use App\Models\Group;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Compaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {   
        $user=Auth::user();
        $date = Carbon::today()->subDays(30);
        $users=User::all();
        $new_users=User::where('created_at','>=',$date)->get();
        //dd($new_users);
        $new_deals=Deal::where('created_at','>=',$date)->get();
        $groups=Group::all();
        $compaigns=Compaign::all();
        $agents=Agent::all();
        $projects=Project::all();
        $deals=Deal::all();
        return view('admin.index',compact('agents','projects','new_users','users','new_deals','compaigns','deals','groups'));
       
       // $contact_id=Contact::where('user_id',$user->id)->first();
        // if($user->role=='Admin')
        // {
        //      return view('admin.index',compact('agents','projects','new_users','users','new_deals','compaigns','deals','groups'));
        // }else
        // {
        //     return redirect('/dashboard/'.$user->id);
        // }
       
    }
    public function profile(Request $request)
    {   
        $user=User::findOrFail(auth()->user()->id);
        return view('admin.profile',compact('user'));
    }
    public function profile_update(Request $request)
    {   
        $validateData=$request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
         'address'=>'required',
         'phone'=>'required',
         'gender'=>'required',
         'dob'=>'required',
         'email'=>'required'
       ]);
        $user=User::findOrFail(auth()->user()->id);
        $validateData['username']=$request->first_name.$request->last_name;
        $user->update($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Profile Updated SuccessFully'
        );
        return redirect()->back()->with($notification);
    }
}
