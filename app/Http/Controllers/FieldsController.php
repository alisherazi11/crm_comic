<?php

namespace App\Http\Controllers;

use App\Models\Fields;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Throwable;
use DB;
class FieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fields=Fields::all();

        return view('admin.fields')->with('fields', $fields);
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
    public function store(Request $req)
    {
        $field=null;
        try {
            $field_name=makecolumnname($req->field_name);
            $input=[
                'field_name'=>$req->field_name,
                'column_name'=>$field_name,
                'field_tab'=>$req->field_tab,
                'field_status'=>1,
                'field_visible'=>1,
                'field_permissions_caller_edit'=>1,
                'field_permissions_caller_search'=>1,
                'field_type'=>'text',
                'field_data_lenght_min'=>100,
                'field_data_lenght_mx'=>255
            ];
            $field=Fields::where('column_name', $field_name)->first();
            if($field!=null){
                return redirect()->back()->with('error', 'This field already exist, a field can not be duplicated');
            }

            $field=Fields::create($input);

            Schema::table('contacts', function (Blueprint $table) use ($field_name) {
                $table->text($field_name)->nullable();
            });

            return redirect()->back()->with('success', 'Field successfully created');
        }
        catch (\Exception $e){
            if($field!=null){
                $field->delete();
            }
            return redirect()->back()->with('error', 'Something went wrong with this error:  '.$e->getMessage());
        }


        
    }



    public function duplicate($id)
    {
        $old_field=Fields::find($id);
        if($old_field==null){
            return redirect()->back()->with('error', 'Something went wrong');
        }
        $field=null;
        $old_field_name=$old_field->field_name.' II';
        try {
            $field_name=makecolumnname($old_field_name);
            $input=[
                'field_name'=>$old_field_name,
                'column_name'=>$field_name,
                'field_tab'=>$old_field->field_tab,
                'field_status'=>$old_field->field_status!=null ? 1 : 0 ,
                'field_visible'=>$old_field->field_visible,
                'field_permissions_caller_edit'=>$old_field->field_permissions_caller_edit,
                'field_permissions_caller_search'=>$old_field->field_permissions_caller_search,
                'field_type'=>$old_field->field_type,
                'field_data_lenght_min'=>$old_field->field_data_lenght_min,
                'field_data_lenght_mx'=>$old_field->field_data_lenght_mx
            ];
            $field=Fields::where('column_name', $field_name)->first();
            if($field!=null){
                return redirect()->back()->with('error', 'This field already exist, a field can not be duplicated');
            }

            $field=Fields::create($input);

            Schema::table('contacts', function (Blueprint $table) use ($field_name) {
                $table->text($field_name)->nullable();
            });

            return redirect()->back()->with('success', 'Field successfully duplicated');
        }
        catch (\Exception $e){
            if($field!=null){
                $field->delete();
            }
            return redirect()->back()->with('error', 'Something went wrong with this error:  '.$e->getMessage());
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fields  $fields
     * @return \Illuminate\Http\Response
     */
    public function show(Fields $fields)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fields  $fields
     * @return \Illuminate\Http\Response
     */
    public function edit(Fields $field)
    {
        $fields=Fields::all();

        return view('admin.edit-fields')->with(['fields'=>$fields, 'get_field'=>$field]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fields  $fields
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, Fields $field)
    {
        $old_field=$field;
        $field_update=$field;
        try {
            $field_name=makecolumnname($req->field_name);
            $input=[
                'field_name'=>$req->field_name,
                'column_name'=>$field_name,
                'field_status'=>$req->field_status!=null ? 1 : 0 ,
                'field_visible'=>$req->field_visible,
                'field_permissions_caller_edit'=>$req->field_permissions_caller_edit,
                'field_permissions_caller_search'=>$req->field_permissions_caller_search,
                'field_type'=>$req->field_type,
                'field_data_lenght_min'=>$req->field_data_lenght_min,
                'field_data_lenght_mx'=>$req->field_data_lenght_mx
            ];

            $field_update=Fields::where('column_name', $field_name)->where('id','!=',$field->id)->first();
            if($field_update!=null){
                return redirect()->back()->with('error', 'This field already exist, a field can not be duplicated');
            }

            Schema::table('contacts', function (Blueprint $table) use ($field_name, $old_field) {
                $table->renameColumn($old_field->column_name,$field_name);
            });
            $field_update=$field;
            $field_update=$field_update->update($input);

            return redirect()->back()->with('success', 'Field successfully updated');
        }
        catch (\Exception $e){
            
                $field->update([
                'field_name'=>$old_field->field_name,
                'column_name'=>$old_field->column_name,
                'field_status'=>$old_field->field_status!=null ? 1 : 0 ,
                'field_visible'=>$old_field->field_visible,
                'field_permissions_caller_edit'=>$old_field->field_permissions_caller_edit,
                'field_permissions_caller_search'=>$old_field->field_permissions_caller_search,
                'field_type'=>$old_field->field_type,
                'field_data_lenght_min'=>$old_field->field_data_lenght_min,
                'field_data_lenght_mx'=>$old_field->field_data_lenght_mx
            ]);
            
            return redirect()->back()->with('error', 'Something went wrong with this error:  '.$e->getMessage());
        }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fields  $fields
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get_field='';
        try {
            $field=Fields::find($id);
            $get_field=$field;
            $field_name=$field->column_name;

            Schema::table('contacts', function (Blueprint $table) use ($field_name) {
                $table->dropColumn($field_name);
            });

            $field->delete();
            return redirect('fields')->with('success', 'Field successfully deleted');            

        } catch (Exception $e) {
            $get_field->save();
            return redirect('fields')->with('error', 'Something went wrong with this error: '.$e->getMessage());            
        }
    }
}
