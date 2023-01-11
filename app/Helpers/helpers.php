<?php

use App\Models\Project;
use App\Models\Contact;
use App\Models\Fields;
use App\Models\User;
function getprojectname($id){
    $data = Project::find($id);
    return $data->title;
}
function getallcontact($id){
    $contact = Contact::where('project_id',$id)->get();
    return count($contact);
}

function makecolumnname($string) {
    $string = preg_replace('/[^\da-z _]/i', '', $string);
    $string = str_replace(' ', '_', $string);
    return strtolower($string);
}

function getfields()
{
    return Fields::all();
}

function users()
{
   return User::all();
}