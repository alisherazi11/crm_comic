<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;

class DocumentController extends Controller
{
    public function index()
    {   
        $documents=Documents::where('user_id',auth()->user()->id)->get();

        return view('staff.document',compact('documents'));
    }
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'filename'=>'required',
            'description'=>'required'
        ]);
        if($request->file('filename'))
        {
            $image=$request->file('filename');
            $image_name=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/document'),$image_name);
            $validateData['filename']=$image_name;
        }
        $validateData['user_id']=auth()->user()->id;
        $document=Documents::create($validateData);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'document uploaded'
        );
        return redirect()->back()->with($notification);
    }
    public function destroy(Request $request)
    {
        $document=Documents::findOrFail($request->id);
        $document->delete();
        $notification=array(
            'alert-type'=>'success',
            'message'=>'document Deleted'
        );
        return redirect()->back()->with($notification);
    }
    public function show(Request $request)
    {
         $document=Documents::findOrFail($request->id);
         return $document;
    }
    public function update(Request $request)
    {
        $document=Documents::findOrFail($request->id);
        $document->update(['description'=>$request->description]);
        $notification=array(
            'alert-type'=>'success',
            'message'=>'document Updated'
        );
        return redirect()->back()->with($notification);
    }
}
