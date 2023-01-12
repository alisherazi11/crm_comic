<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fields extends Model
{
    use HasFactory;
    

    protected $table='fields';
    protected $softdelete=true;

    protected $fillable=['field_name','column_name','field_tab','field_status','field_visible','field_permissions_caller_edit','field_permissions_caller_search','field_type','field_data_lenght_min','field_data_lenght_mx', 'project_id','index_id'];
}
