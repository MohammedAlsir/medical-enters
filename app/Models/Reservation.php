<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'doctor_id', 'patient_id', 'medical_center_id', 'created_at', 'updated_at'];

    public function Doctor_Fun_Relation()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }


    public function MedicalCenter_Fun_Relation()
    {
        return $this->belongsTo('App\Models\MedicalCenter', 'medical_center_id');
    }
}