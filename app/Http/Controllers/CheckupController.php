<?php

namespace App\Http\Controllers;

use App\Models\Checkup;
use Illuminate\Http\Request;
use App\Traits\Oprations;
use App\Models\Specialtie;
use App\Models\Lab;
use App\Models\Doctor;
use App\Models\Patient;

class CheckupController extends Controller
{
    use Oprations;

    // == Funcion Return Checkup View ==
    public function index()
    {
        $checkupes = Checkup::orderBy('id', 'DESC')->with([
            'Doctor_Fun_Relation' => function ($select) {
                $select->select('id', 'name', 'id');
            },
            'Lab_Fun_Relation' => function ($select) {
                $select->select('id', 'name');
            }
        ])->get();

        $index = 1;
        return view('PagesCheckupes.index', compact('checkupes', 'index'));
    }

    // == Funcion Create  Checkup  ==
    public function create()
    {
        $labs = Lab::select('id', 'name')->get();
        $doctors = Doctor::select('id', 'name')->get();
        return view('PagesCheckupes.create', compact('labs', 'doctors'));
    }


    // == Funcion Store New Checkup  ==
    public function store(Request $request)
    {
        if (isset($request))
            return $this->store_data(Checkup::class, $request, 'checkupes.create', 'تم إضافة الفحص بنجاح ');
    }

    public function show($id)
    {
        //
    }

    // == Funcion Return  Checkup Edit View ==
    public function edit($checkup_id)
    {
        if (isset($checkup_id)) {

            $checkup = Checkup::with([
                'Doctor_Fun_Relation' => function ($select) {
                    $select->select('id', 'name', 'id');
                },
                'Lab_Fun_Relation' => function ($select) {
                    $select->select('id', 'name');
                }
            ])->find($checkup_id);

            $labs = Lab::select('id', 'name')->get();
            $doctors = Doctor::select('id', 'name')->get();

            return view('PagesCheckupes.edit', compact('checkup', 'labs', 'doctors'));
        }
    }

    // == Funcion Update  Checkup Data ==
    public function update(Request $request, $checkup_id)
    {
        if (isset($checkup_id) &&  isset($request)) {
            return $this->update_data(Checkup::class, $request, $checkup_id, 'checkupes.index', 'تم تحديث بيانات الفحص بنجاح');
        }
    }

    // == Funcion Delete Checkup  ==
    public function destroy($checkup_id)
    {
        return $this->delete_data(Checkup::class, $checkup_id, 'checkupes.index', 'تم حذف الفحص  ');
    }
}
