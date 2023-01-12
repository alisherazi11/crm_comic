<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $hidden=['id','created_at','updated_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function collaborator()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }
}
