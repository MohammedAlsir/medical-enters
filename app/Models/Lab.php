<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'medical_center_id'
    ];
      public function Checkup_Fun_Relation()
    {
        return $this->hasMany('App\Models\Checkup' ,'lab_id');
    }
}