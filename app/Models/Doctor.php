<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

       public function Checkup_Fun_Relation()
    {
        return $this->hasMany('App\Models\Checkup' ,'doctor_id');
    }
}