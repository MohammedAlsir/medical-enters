<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    use HasFactory;
    protected $table = 'checkups';
    protected $primaryKey = 'id';
    protected $fillable = ['id','ckeckup_name' ,'ckeckup_price', 'ckeckup_time','doctor_id','patient_id','lab_id','created_at' ,'updated_at'];

     public function Doctor_Fun_Relation()
    {
        return $this->belongsTo('App\Models\Doctor' ,'doctor_id');
    }


     public function Lab_Fun_Relation()
    {
        return $this->belongsTo('App\Models\Lab' ,'lab_id');
    }

    //  public function Doctor_Fun_Relation()
    // {
    //     return $this->belongsTo('App\Models\Doctor' ,'doctor_id');
    // }
}