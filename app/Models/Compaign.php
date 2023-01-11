<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compaign extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function group()
    {
        return $this->hasOne(Group::class);
    }
    public function agent()
    {
        return $this->hasOne(Agent::class);
    }
}
