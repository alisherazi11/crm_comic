<?php

namespace App\Http\Controllers;

use App\Exports\ActivityReportExport;
use App\Models\EmailTemplate;
use App\Models\SmsTemplate;
use App\Models\User;
use App\Models\Contact;
use App\Models\Activity;
use App\Models\LeadDetail;
use App\Models\script;
use App\Models\Project;
use App\Models\Rescultcode;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\AdditionalDetail;
use App\Models\ApplicationDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Deal;
use App\Models\Group;
use App\Models\Compaign;
use App\Models\Agent;
use Illuminate\Support\Facades\DB;
use DataTables;

// use Illuminate\Support\Arr;

class DashboardController extends Controller
{
    public function index()
    {
        $contact = User::find(auth()->user()->id);
        return view('staff.index', compact('contact'));
    }

    public function update(Request $request)
    {
        $user = Contact::find($request->id);
        $user->update($request->all());
        $notification = array(
            'alert-type' => 'success',
            'message' => 'Updated Successfully'
        );
        return redirect()->back()->with($notification);
    }

    public function dashboard(Request $request)
    {
        $user = auth()->user();
        return view('staff.dashboard', compact('user'));
    }

    public function DashboardDetails($id, $contactId = null)
    {
        $project = Project::find($id);
        $contact = User::find($project->user_id);
        $direction = Auth::user()->order_by_contact;
        if ($contactId) {
            session()->put('cid', $contactId);
            $UserData = Contact::with("collaborator")->orderBy('id', $direction)->where('id', $contactId)->first();
        } else {
            $UserData = Contact::with("collaborator")->orderBy('id', $direction)->where('project_id', $id)->first();
            // $UserData = Contact::orderBy('id', $direction)->where('project_id', $id)->inRandomOrder()->first();
        }

        $activitydata = Activity::where('project_id', $id)->orderBy('created_at', 'desc')->get();
        $resultcode = Rescultcode::where('project_id', $id)->get();
        $script = script::where('project_id', $id)->get();
        return view('staff.index', compact('contact', 'UserData', 'activitydata', 'resultcode', 'script', 'project'));
    }

    public function filterProject($id, Request $request)
    {
        session()->put('pid', $id);
        $users = User::all();

        if ($request->search_bit) {
            $contacts = Contact::with('project', 'user')
                ->when(!isset($request->all_projects), function (Builder $query) use ($id) {
                    $query->where('project_id', $id);
                });
            if ($request->contact_id) {
                $contacts = $contacts->where('id', $request->contact_id);
            }
            if ($request->company) {
                $contacts = $contacts->where('name', 'LIKE', "%$request->company%");
            }
            if ($request->first_name) {
                $contacts = $contacts->where('first_name', 'LIKE', "%$request->first_name%");
            }
            if ($request->title) {
                $contacts = $contacts->where('title', 'LIKE', "%$request->title%");
            }
            if ($request->last_name) {
                $contacts = $contacts->where('last_name', 'LIKE', "%$request->last_name%");
            }
            if ($request->address) {
                $contacts = $contacts->where('address', 'LIKE', "%$request->address%");
            }
            if ($request->email) {
                $contacts = $contacts->where('email', $request->email);
            }
            if ($request->city) {
                $contacts = $contacts->where('city', $request->city);
            }
            if ($request->phone_number) {
                $contacts = $contacts->where('mobile_number', $request->phone_number);
            }
            if ($request->state) {
                $contacts = $contacts->where('state', $request->state);
            }
            if ($request->user_id) {
                $contacts = $contacts->where('user_id', $request->user_id);
            }
            if ($request->zip) {
                $contacts = $contacts->where('zip', $request->zip);
            }
            if ($request->radius) {
//                $contacts = $contacts->where('name', $request->radius);
            }
            if ($request->country) {
                $contacts = $contacts->where('name', $request->country);
            }
            $direction = Auth::user()->order_by_contact;
            $contacts = $contacts->orderBy('id', $direction)->get();
        } else {
            $contacts = collect([]);
        }
        return view('admin.filterProject', compact('id', 'users', 'contacts'));
    }

    public function dashboardreturn()
    {
        $project = Project::find(session('pid'));
        $contact = User::find($project->user_id);
        $UserData = Contact::where('project_id', session('pid'))->inRandomOrder()->first();
        if ($UserData == '') {
            return redirect('add-contactdashboard/' . $project->id);
        }
        if ($project == '') {
            return redirect()->route('project');
        }
        // dd($UserData);
        $activitydata = Activity::where('project_id', session('pid'))->orderBy('created_at', 'desc')->get();
        $resultcode = Rescultcode::where('project_id', session('pid'))->take(8)->get();
        $script = script::where('project_id', session('pid'))->get();
        return view('staff.index', compact('contact', 'UserData', 'activitydata', 'resultcode', 'script', 'project'));
    }

    public function reqcontact($id)
    {
        //session()->put('pid', $id);
        $contact = User::find($id);
        if ($contact == '') {
            return redirect()->back();
        }
        $project = Project::where('user_id', $contact->id)->first();
        $contact = User::find($project->user_id);
        $UserData = Contact::where('email', $contact->email)->first();
        $activitydata = Activity::where('project_id', $id)->orderBy('created_at', 'DESC')->get();
        $resultcode = Rescultcode::where('project_id', $id)->take(8)->get();
        $script = script::where('project_id', $id)->get();
        //session('pid', $id);
        return view('staff.index', compact('contact', 'UserData', 'activitydata', 'resultcode', 'script', 'project'));
    }

    public function emailsms()
    {
        $date = Carbon::today()->subDays(30);
        $users = User::all();
        $new_users = User::where('created_at', '>=', $date)->get();
        $new_deals = Deal::where('created_at', '>=', $date)->get();
        $groups = Group::all();
        $compaigns = Compaign::all();
        $agents = Agent::all();
        $projects = Project::all();
        $deals = Deal::all();
        $resultcodedata = Rescultcode::where("project_id", project_id())->get();
        $project = Project::all();
        return view('admin.emailsms', compact('project', 'agents', 'projects', 'new_users', 'users', 'new_deals', 'compaigns', 'deals', 'groups', 'resultcodedata'));
    }

    public function add_email()
    {
        $date = Carbon::today()->subDays(30);
        $users = User::all();
        $new_users = User::where('created_at', '>=', $date)->get();
        $new_deals = Deal::where('created_at', '>=', $date)->get();
        $groups = Group::all();
        $compaigns = Compaign::all();
        $agents = Agent::all();
        $projects = Project::all();
        $deals = Deal::all();
        return view('admin/add_email', compact('agents', 'projects', 'new_users', 'users', 'new_deals', 'compaigns', 'deals', 'groups'));
    }

    public function email()
    {
        $users = User::all();
        $emailTemps = EmailTemplate::where('user_id', auth()->id())->where("project_id", project_id())->get();
        $projects = Project::all();
        $resultcodedata = Rescultcode::all();
        return view('admin.email', compact('projects', 'users', 'resultcodedata', 'emailTemps'));
    }

    public function renameEmailTemp(Request $request)
    {
        $emailTemp = EmailTemplate::find($request->email_temp_id);
        $emailTemp->update([
            'name' => $request->email_temp_name
        ]);
        $notification = array(
            'alert-type' => 'success',
            'message' => 'Email Template Name Updated.'
        );
        return redirect()->back()->with($notification);
    }

    public function deleteEmailTemp($id)
    {
        $emailTemp = EmailTemplate::find($id);
        $emailTemp->delete();
        return true;
    }

    public function addEmailTemp(Request $request)
    {
        $emailTemp = EmailTemplate::create([
            'user_id' => auth()->id(),
            'name' => $request->email_temp_name,
            'subject' => $request->email_temp_subject,
            'body' => $request->email_temp_body,
            'project_id' => project_id(),
        ]);
        $notification = array(
            'alert-type' => 'success',
            'message' => 'Email Template Added Successfully.'
        );
        return redirect()->back()->with($notification);
    }

    public function smsTemplates()
    {
        $smsTemps = SmsTemplate::where('user_id', auth()->id())->where("project_id", project_id())->get();
        return view('admin.sms-templates', compact('smsTemps'));
    }

    public function smsForm($id = null)
    {
        $emailTemp = null;
        if ($id) {
            $emailTemp = SmsTemplate::where(['user_id' => auth()->id(), 'id' => $id])->where('project_id', project_id())->first();
        }
        return view('admin.sms-add', compact('emailTemp'));
    }

    public function smsTemDelete($id)
    {
        $emailTemp = SmsTemplate::where(['user_id' => auth()->id(), 'id' => $id])->first();
        $emailTemp->delete();
        $notification = array(
            'alert-type' => 'warning',
            'message' => 'SMS Template Deleted.'
        );
        return redirect('admin/sms-templates')->with($notification);

    }

    public function smsFormPost(Request $request)
    {
        if ($request->id) {
            $emailTemp = SmsTemplate::where(['user_id' => auth()->id(), 'id' => $request->id])->first();
            $emailTemp->update(array_merge($request->except('_token'), ['user_id' => auth()->id()]));
            $message = 'SMS Template Updated Successfully.';
        } else {
            $emailTemp = SmsTemplate::create(array_merge($request->except('_token'), ['user_id' => auth()->id(), 'project_id' => project_id()]));
            $message = 'SMS Template Added Successfully.';
        }

        $notification = array(
            'alert-type' => 'success',
            'message' => $message
        );
        return redirect('admin/sms-templates')->with($notification);
    }

    public function add_sms()
    {
        $date = Carbon::today()->subDays(30);
        $users = User::all();
        $new_users = User::where('created_at', '>=', $date)->get();
        $new_deals = Deal::where('created_at', '>=', $date)->get();
        $groups = Group::all();
        $compaigns = Compaign::all();
        $agents = Agent::all();
        $projects = Project::all();
        $deals = Deal::all();
        return view('admin/add_sms', compact('agents', 'projects', 'new_users', 'users', 'new_deals', 'compaigns', 'deals', 'groups'));
    }

    public function searchuser($id)
    {
        $data = Contact::where('project_id', session('pid'))->where('first_name', 'like', $id . '%')->get();
        return $data;
    }

    public function Userdetails(Request $request)
    {

        if(!$request->ajax()){
            $data = User::where('role', '!=', 'admin')->get();
            $project = Project::where('status', 1)->get();
            $inactive = Project::where('status', 0)->get();
            return view('admin.user_details', compact('data', 'project', 'inactive'));
        }

        $status = $request->status ? ($request->status == 1 ? 1 : 0) : 0;
        $records = User::where('role', '!=', 'admin')->where("status", $status)->get();
        return DataTables::of($records)
            ->addColumn('status_str', function ($records) {
                return $records->status == 1 ? '<span class="text-success">True</span>' : '<span class="text-danger">False</span>';
            })
            ->addColumn('edit_profile_str', function ($records) {
                return $records->edit_profile == 1 ? '<span class="text-success">True</span>' : '<span class="text-danger">False</span>';
            })
            ->addColumn('allow_switching_str', function ($records) {
                return $records->allow_switching == 1 ? '<span class="text-success">True</span>' : '<span class="text-danger">False</span>';
            })
            ->addColumn('edit_dialing_info_str', function ($records) {
                return $records->edit_dialing_info == 1 ? '<span class="text-success">True</span>' : '<span class="text-danger">False</span>';
            })
            ->addColumn('my_stats_page_str', function ($records) {
                return $records->my_stats_page == 1 ? '<span class="text-success">True</span>' : '<span class="text-danger">False</span>';
            })
            ->addColumn('action', function ($records) {
                $table_name = $records->status == 1 ? "active-users" : "user-inactive";
                $table_function = $records->status == 1 ? "make_table" : "make_inactive_table";
                $delete_url = url("admin/delete-user/" . $records->id);
                $delete = "<ion-icon id='row$records->id' class='closeicon delete_user cursor-pointer'
                onclick='delete_record(\"" . $delete_url . "\",  \"#row$records->id\",  \"".$table_name."\" ,\"".$table_function."\")' name='close-circle-outline'>
                </ion-icon>";

                $edit_url = url("edit-user/" . $records->id);
                $edit = "<a href='$edit_url'><ion-icon class='closeicon delete_user mr-2 ' name='create-outline'>
                </ion-icon></a>";

                return $edit. $delete;

            })
            ->rawColumns(['action','status_str','edit_profile_str','allow_switching_str','edit_dialing_info_str','my_stats_page_str'])
            ->make(true);
    }

    public function create(){
        return view('admin.user.create');
    }

    public function edit($id){
        $user = User::where("id", $id)->first();
        return view('admin.user.edit', compact("user"));
    }

    

    public function newdashboard(Request $request)
    {
        if (isset($request->_token)) {
            switch ($request->input('action')) {
                case 'search':
                    $from = $request->start;
                    $to = $request->end;
                    $activities = DB::table('activities')->select(DB::raw('*'))
                        ->whereBetween(DB::raw('DATE(created_at)'), array($from, $to))->get();
                    $projectIds = array_unique($activities->pluck('project_id')->toArray());
                    $usersIds = array_unique($activities->pluck('user_id')->toArray());
                    $resultCodes = Rescultcode::whereIn('project_id', $projectIds)->pluck('id', 'result_code')->toArray();
                    $contacts = User::whereIn('id', $usersIds)->get();
                    $projects = Project::whereIn('id', $projectIds)->get();
                    $results = [];
                    foreach ($contacts as $contact) {
                        $activitiesFinal = DB::table('activities')->select(DB::raw('*'))->orderBy('created_at', 'ASC')
                            ->whereBetween(DB::raw('DATE(created_at)'), array($from, $to))->where('user_id', $contact->id)->get()->groupBy('result_code_id');

                        $codeValue = [
                            'contact_id' => $contact->id,
                            'contact_name' => $contact->first_name . ' ' . $contact->last_name,
                            'project_name' => isset($activitiesFinal->first()[0]) ? $this->getActivityProject($activitiesFinal->first()[0]->project_id) : '-',
                            'hours' => isset($activitiesFinal->first()[0]) ? $this->getActivityHours($activitiesFinal->first()[0]->created_at) : '-',
                        ];
                        foreach ($resultCodes as $key => $code) {
                            $codeValue[$key] = isset($activitiesFinal[$code]) ? $activitiesFinal[$code]->count() : '-';
                        }

                        $results[] = $codeValue;
                    }
                    return view('admin.newdashboard', compact('resultCodes', 'results', 'projects'));
                case 'export':
                    $from = $request->start;
                    $to = $request->end;
                    $activities = DB::table('activities')->select(DB::raw('*'))
                        ->whereBetween(DB::raw('DATE(created_at)'), array($from, $to))->get();
                    $projectIds = array_unique($activities->pluck('project_id')->toArray());
                    $usersIds = array_unique($activities->pluck('user_id')->toArray());
                    $resultCodes = Rescultcode::whereIn('project_id', $projectIds)->pluck('id', 'result_code')->toArray();
                    $contacts = User::whereIn('id', $usersIds)->get();
                    $results = [];
                    foreach ($contacts as $contact) {
                        $activitiesFinal = DB::table('activities')->select(DB::raw('*'))->orderBy('created_at', 'ASC')
                            ->whereBetween(DB::raw('DATE(created_at)'), array($from, $to))->where('user_id', $contact->id)->get()->groupBy('result_code_id');

                        $codeValue = [
                            'contact_id' => $contact->id,
                            'contact_name' => $contact->first_name . ' ' . $contact->last_name,
                            'project_name' => isset($activitiesFinal->first()[0]) ? $this->getActivityProject($activitiesFinal->first()[0]->project_id) : '-',
                            'hours' => isset($activitiesFinal->first()[0]) ? $this->getActivityHours($activitiesFinal->first()[0]->created_at) : '-',
                        ];
                        foreach ($resultCodes as $key => $code) {
                            $codeValue[$key] = isset($activitiesFinal[$code]) ? $activitiesFinal[$code]->count() : '-';
                        }
                        $results[] = $codeValue;
                    }
                    $data = ['resultCodes' => $resultCodes, 'results' => $results];
                    return Excel::download(
                        new ActivityReportExport(
                            'exports.activity-report',
                            $data,
                        ), 'dashboard-report' . now()->format('mdY') . '.xlsx');
            }
        }
        $projects = collect([]);
        return view('admin.newdashboard', compact('projects'));
    }

    public function orderRoute()
    {
        return view('admin.orderRoute');
    }

    public function orderRouteUpdate(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'order_by_contact' => $request->order_by_contact,
        ]);
        $notification = array(
            'alert-type' => 'success',
            'message' => 'Routing Order Updated SuccessFully.'
        );
        return redirect()->back()->with($notification);
    }

    private function getActivityHours($activity)
    {
        $from = Carbon::createFromFormat('Y-m-d H:s:i', $activity);
        $to = Carbon::createFromFormat('Y-m-d H:s:i', Carbon::now());
        $diff_in_hours = $to->diffInMinutes($from);
        $hours = round($diff_in_hours / 60, 1);
        return $hours;
    }

    private function getActivityProject($id)
    {
        return optional(Project::find($id))->title;
    }
}
