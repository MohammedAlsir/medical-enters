<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
    ];

    public function Spleciale_Fun_Relation()
    {
        return $this->hasMany('App\Models\Specialtie' ,'medical_center_id');
    }
}