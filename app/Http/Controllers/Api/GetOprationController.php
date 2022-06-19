<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\MedicalCenter;
use App\Models\Specialtie;
use App\Traits\ApiMessage;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class GetOprationController extends Controller
{
    use ApiMessage;

    /*
        == get all hospital function ==
    */
    public function getMedicalCenters()
    {
        // == begin ==
        $medicalCenter = MedicalCenter::all();
        return $this->returnData('medicalCenter', $medicalCenter);
        // == end ==
    }

    /*
        == get all Specialties in hospital function ==
    */
    public function getSpecialties(Request $request)
    {
        // == begin ==
        $specialties = Specialtie::all();
        return $this->returnData('specialties', $specialties);
        // == end ==
    }


    /*
        == get all Doctors in Specialties function ==
    */
    public function getDoctors(Request $request)
    {
        // == begin ==
        $doctors = Doctor::where('specialtie_id', $request->specialtie_id)->where('medical_center_id', $request->medical_center_id)->get();
        return $this->returnData('doctors', $doctors);
        // == end ==
    }
}