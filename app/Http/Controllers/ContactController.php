<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\LeadDetail;
use Illuminate\Http\Request;
use App\Models\AdditionalDetail;
use App\Models\ApplicationDetail;
use App\Models\ResultCode;
use App\Models\User;
use App\Models\Activity;
use Carbon\Carbon;
use App\Models\Deal;
use App\Models\Agent;
use App\Models\script;
use App\Models\Group;
use App\Models\Rescultcode;
use App\Exports\ContactSampleExport;
use App\Imports\ContactsImport;
use Maatwebsite\Excel\Facades\Excel;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::with('collaborator')->where("project_id", project_id())->get();
        return view('staff.contact',compact('contacts'));
    }


    public function deals()
    {
        $contacts= Contact::with('collaborator')->where("project_id", project_id())->get();
        return view('staff.deals',compact('contacts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::all();
        return view('staff.add_contact',compact('project'));
    }

    public function importcontacts()
    {
       return view('staff.import_contacts');
    }

    public function downloadcontactssample()
    {
        return Excel::download(new ContactSampleExport, 'contact-sample.xlsx',\Maatwebsite\Excel\Excel::XLSX);
    }

    public function importcontactsstore(Request $req)
    {
        try {
            $file=$req->file('file');
            Excel::import(new ContactsImport, $file);

            $notification=array(
            'alert-type'=>'success',
            'message'=>'Contact imported Successfully'
        );
        return redirect('/admin/contacts')->with($notification);


        } catch (\Throwable $e) {

            $notification=array(
            'alert-type'=>'error',
            'message'=>'Something went wrong with this error: '.$e->getMessage(),
        );
        return redirect('/admin/contacts')->with($notification);

        }
        catch (\Exception $e) {

            $notification=array(
            'alert-type'=>'error',
            'message'=>'Something went wrong with this error: '.$e->getMessage(),
        );
        return redirect('/admin/contacts')->with($notification);

        }

    }


    public function addcontact($id)
    {
        $project = Project::where('id',$id)->first();
        return view('staff.add_contactdashboard',compact('project'));
    }

    /**yes
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validateData=$request->except('_token');
        $validateData['user_id']=auth()->user()->id;
        $contact=Contact::insert($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Contact Added Successfully'
        );
        if($request->has('reqdashboard')){
            $project = Project::find($request->project_id);
            $contact = User::find($project->user_id);
            $UserData = Contact::where('project_id',$request->project_id)->inRandomOrder()->first();
            $activitydata = Activity::where('project_id',$request->project_id)->orderBy('created_at', 'desc')->get();
            $resultcode = Rescultcode::where('project_id',$request->project_id)->take(8)->get();
            $script = script::where('project_id',$request->project_id)->get();
            return redirect('dashboard/'.$request->project_id)->with($notification);
        }
        else{
            return redirect()->back()->with($notification);
        }
    }
     public function update_contact(Request $request)
    {
       
        $validateData=$request->except('_token');
        
        $contact=Contact::find($request->id);
        $contact->update($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'Contact Updated Successfully'
        );
        return redirect('/admin/contacts')->with($notification);
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
    public function edit(Request $request,$id)
    {
        $contact=Contact::find($id);
        $project=Project::all();
        return view('staff.edit_contact',compact('contact','project'));
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
        try {
        $contacts=Contact::find($id);
        $contacts->delete();

        return redirect()->back()->with(['alert-type'=>"success", 'message'=>"Contact Successfully delete"]);
        } catch (Exception $e) {
        return redirect()->back()->with(['alert-type'=>"error", 'message'=>"Something went wrong"]);
        }
        catch (Throwable $e){
        return redirect()->back()->with(['alert-type'=>"error", 'message'=>"Something went wrong"]);
        }

        

    }
}
