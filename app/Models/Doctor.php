<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function Checkup_Fun_Relation()
    {
        return $this->hasMany('App\Models\Checkup', 'doctor_id');
    }

    // == Relation with medical ==
    public function Medical()
    {
        return $this->belongsTo(MedicalCenter::class, 'medical_center_id');
    }

    // == Relation with Specialtie ==
    public function Specialtie()
    {
        return $this->belongsTo(Specialtie::class, 'specialtie_id');
    }
}
