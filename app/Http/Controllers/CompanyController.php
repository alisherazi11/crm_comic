<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=Company::where('user_id',auth()->user()->id)->first();
        return view('admin.setting',compact('company'));
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
          'name'=>'required',
          'email'=>'required',
          'address'=>'required',
          'postcode'=>'required',
          'city'=>'required',
          'contact'=>'required',
          'fax'=>'required',
          'website'=>'required',
          'account_title'=>'required',
          'account_number'=>'required',
          'sort_code'=>'required',
          'company_registration'=>'required',
          'company_vat_register'=>'required',
          'bank_detail'=>'required',
          'paye_reference'=>'required',
          'start_of_holiday'=>'required',
          'expiry_on'=>'required'
        ]);
        if($request->file('logo'))
        {
            $image=$request->file('logo');
            $image_name=time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/company'),$image_name);
            $validateData['logo']=$image_name;
        }
        $validateData['user_id']=auth()->user()->id;
        $company=Company::where('user_id',auth()->user()->id)->first();
        if($company)
        {
            $company->update($validateData);
        }else
        {
            Company::create($validateData);
                }
         $notification=array(
            'alert-type'=>'success',
            'message'=>'Company Data Saved Successfully'
        );
        return redirect('/admin')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
