<?php

namespace App\Http\Controllers;

use App\Models\ResultCode;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Deal;
use App\Models\Agent;
use App\Models\script;
use App\Models\Group;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Rescultcode;
use App\Models\Compaign;
use Illuminate\Support\Facades\Auth;

class ResultCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Project::find($id);

        $resultcode = Rescultcode::where('project_id', $id)->get();
        return view('staff.result', compact('resultcode', 'data'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ResultCode $resultCode
     * @return \Illuminate\Http\Response
     */
    public function show(ResultCode $resultCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ResultCode $resultCode
     * @return \Illuminate\Http\Response
     */
    public function edit(ResultCode $resultCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ResultCode $resultCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResultCode $resultCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ResultCode $resultCode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Rescultcode::find($id);
        $project->delete();
        $notification = array(
            'alert-type' => 'success',
            'message' => 'Result Code Deleted Successfully'
        );
        return redirect()->back()->with($notification);
    }

    public function ResultCode()
    {
        $user = Auth::user();
        $date = Carbon::today()->subDays(30);
        $users = User::all();
        $new_users = User::where('created_at', '>=', $date)->get();
        //dd($new_users);
        $new_deals = Deal::where('created_at', '>=', $date)->get();
        $groups = Group::all();
        $compaigns = Compaign::all();
        $agents = Agent::all();
        $projects = Project::all();
        $deals = Deal::all();
        $resultcodedata = Rescultcode::all();
        $project = Project::all();
        return view('admin.resultcode', compact('project', 'agents', 'projects', 'new_users', 'users', 'new_deals', 'compaigns', 'deals', 'groups', 'resultcodedata'));
    }

    public function addresultcode(Request $req)
    {
        // dd($req->action);
        $data = new Rescultcode;
        $data->result_code = $req->result_code;
        $data->project_id = $req->project_id;
        $data->result_description = $req->result_description;
        $data->result_group = $req->result_group;
        $data->result_action = $req->result_action;
        if ($req->active == 'on') {
            $data->active = 1;
        } else {
            $data->active = 0;
        }
        $data->active = $req->active;
        $data->dialing_action = $req->dialing_action;
        $data->user_assignment = $req->user_assignment;
        $data->lead_status = $req->lead_status;
        if ($req->require_comments == 'on') {
            $data->require_comments = 1;
        } else {
            $data->require_comments = 0;
        }
        if ($req->recording == 'on') {
            $data->recording = 1;
        } else {
            $data->recording = 0;
        }
        $data->save();
        return redirect()->route('resultcode');
    }

    public function script()
    {
        $user = Auth::user();
        $date = Carbon::today()->subDays(30);
        $users = User::all();
        $new_users = User::where('created_at', '>=', $date)->get();
        //dd($new_users);
        $new_deals = Deal::where('created_at', '>=', $date)->get();
        $groups = Group::all();
        $compaigns = Compaign::all();
        $agents = Agent::all();
        $projects = Project::all();
        $deals = Deal::all();
        $script = script::all();
        $project = Project::all();
        return view('admin.script', compact('agents', 'projects', 'new_users', 'users', 'new_deals', 'compaigns', 'deals', 'groups', 'script', 'project'));
    }

    public function addscript(Request $req)
    {
        // dd($req->action);
        $data = new script;
        $data->project_id = $req->project_id;
        $data->script_title = $req->script_title;
        $data->script_text = $req->script_text;
        $data->save();
        return redirect()->back();
    }

    public function scriptdel($id)
    {
        // dd($req->action);
        $data = script::find($id);
        $data->delete();
        $notification = array(
            'alert-type' => 'success',
            'message' => 'Script Deleted Successfully'
        );
        return redirect()->back()->with($notification);
    }

    public function getscript($id)
    {
        $data = script::find($id);
        // dd($data);
        return $data;
    }

    public function recchecked($id)
    {
        $data = Rescultcode::find($id);
        $data->recording = 1;
        $data->save();
        return $data;
    }

    public function recunchecked($id)
    {
        $data = Rescultcode::find($id);
        $data->recording = 0;
        $data->save();
        return $data;
    }

    public function comchecked($id)
    {
        $data = Rescultcode::find($id);
        $data->require_comments = 1;
        $data->save();
        return $data;
    }

    public function comunchecked($id)
    {
        $data = Rescultcode::find($id);
        $data->require_comments = 0;
        $data->save();
        return $data;
    }

    public function activechecked($id)
    {
        $data = Rescultcode::find($id);
        $data->active = 1;
        $data->save();
        return $data;
    }

    public function activeunchecked($id)
    {
        $data = Rescultcode::find($id);
        $data->active = 0;
        $data->save();
        return $data;
    }

    public function resultCodeEdit(Request $request)
    {
        $resultCode = Rescultcode::find($request->id);
        $resultCode->update([
            $request->field => $request->value
        ]);
        return true;
    }
}
