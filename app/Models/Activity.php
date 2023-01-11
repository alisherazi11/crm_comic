<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function contact(){
        return $this->belongsTo(Contact::class, 'contact_id');
    }
    public function resultCodes(){
        return $this->belongsTo(ResultCode::class, 'result_code_id');
    }
}
