<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialtie extends Model
{
    use HasFactory;
    protected $table = 'specialties';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'specialtie_name', 'medical_center_id', 'created_at', 'updated_at'];

    // public function MedicalCenter_Fun_Relation()
    // {
    //     return $this->belongsTo('App\Models\MedicalCenter' ,'medical_center_id');
    // }

    // ==  ==
    public function count()
    {
        return $this->hasMany(Doctor::class, 'specialtie_id');
    }
}
