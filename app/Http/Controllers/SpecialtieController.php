<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\Oprations;
use App\Models\Specialtie;
use App\Models\MedicalCenter;

class SpecialtieController extends Controller
{

    use Oprations;

    // == Funcion Return Specialtie View ==
    public function index()
    {
        // $specialties = Specialtie::orderBy('id', 'DESC')->with(['MedicalCenter_Fun_Relation' => function ($select) {
        //     $select->select('id', 'name', 'id');
        // }])->get();

        $specialties = Specialtie::orderBy('id', 'DESC')->get();

        $index = 1;
        return view('PagesSpecialties.index', compact('specialties', 'index'));
    }

    // == Funcion Create  Specialtie  ==
    public function create()
    {
        // $medical_centers = MedicalCenter::select('id', 'name')->get();
        return view('PagesSpecialties.create');
    }

    // == Funcion Store New Specialtie  ==
    public function store(Request $request)
    {
        if (isset($request))
            return $this->store_data(Specialtie::class, $request, 'specialtie.create', 'تم إضافة التخصص بنجاح ');
    }

    // == Funcion Show  Specialtie  ==
    public function show($id)
    {
        //
    }

    // == Funcion Return  Specialtie Edit View ==
    public function edit($specialtie_id)
    {
        if (isset($specialtie_id)) {

            $specialtie = Specialtie::with(['MedicalCenter_Fun_Relation' => function ($select) {
                $select->select('id', 'name', 'id');
            }])->find($specialtie_id);

            $medical_centers = MedicalCenter::select('id', 'name')->get();


            return view('PagesSpecialties.edit', compact('specialtie', 'medical_centers'));

            // return $this->edit_data(Specialtie::class, $specialtie_id, 'specialtie.edit');
        }
    }

    // == Funcion Update  Specialtie Data ==
    public function update(Request $request, $specialtie_id)
    {
        if (isset($specialtie_id) &&  isset($request)) {
            return $this->update_data(Specialtie::class, $request, $specialtie_id, 'specialtie.index', 'تم تحديث بيانات التخصص بنجاح');
        }
    }

    // == Funcion Delete Specialtie  ==
    public function destroy($specialtie_id)
    {
        return $this->delete_data(Specialtie::class, $specialtie_id, 'specialtie.index', 'تم حذف التخصص  ');
    }
}