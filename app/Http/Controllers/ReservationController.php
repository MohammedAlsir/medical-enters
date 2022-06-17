<?php

namespace App\Http\Controllers;

use App\Models\Checkup;
use Illuminate\Http\Request;
use App\Traits\Oprations;
use App\Models\Specialtie;
use App\Models\Lab;
use App\Models\Doctor;
use App\Models\MedicalCenter;
use App\Models\Patient;
use App\Models\Reservation;

class ReservationController extends Controller
{
    use Oprations;

    // == Funcion Return Reservation View ==
    public function index()
    {
        $reservations = Reservation::orderBy('id', 'DESC')->with([
            'Doctor_Fun_Relation' => function ($select) {
                $select->select('id', 'name', 'id');
            },
            'MedicalCenter_Fun_Relation' => function ($select) {
                $select->select('id', 'name');
            }
        ])->get();

        $index = 1;
        return view('PagesReservation.index', compact('reservations', 'index'));
    }

    // == Funcion Create  Reservation  ==
    public function create()
    {
        $labs = Lab::select('id', 'name')->get();
        $doctors = Doctor::select('id', 'name')->get();
        $medical_centers = MedicalCenter::select('id', 'name')->get();
        return view('PagesReservation.create', compact('doctors' ,'medical_centers'));
    }

    // == Funcion Store New Reservation  ==
    public function store(Request $request)
    {
          if (isset($request))
            return $this->store_data(Reservation::class, $request, 'reservations.create', 'تم إضافة الحجز بنجاح ');
    }


    public function show($id)
    {
        //
    }

    // == Funcion Return  Reservation Edit View ==
    public function edit($reservation_id)
    {
         if (isset($reservation_id)) {

            $reservation= Reservation::with([
                'Doctor_Fun_Relation' => function ($select) {
                    $select->select('id', 'name', 'id');
                },
                'MedicalCenter_Fun_Relation' => function ($select) {
                    $select->select('id', 'name');
                }
            ])->find($reservation_id);

              $doctors = Doctor::select('id', 'name')->get();
              $medical_centers = MedicalCenter::select('id', 'name')->get();

            return view('PagesReservation.edit', compact('reservation', 'medical_centers', 'doctors'));
        }
    }

    // == Funcion Update  Reservation Data ==
    public function update(Request $request, $reservation_id)
    {
          if(isset($reservation_id) &&  isset($request)){
            return $this->update_data(Reservation::class, $request, $reservation_id, 'reservations.index', 'تم تحديث بيانات الحجز بنجاح');
         }
    }

     // == Funcion Delete Reservation  ==
    public function destroy($reservation_id)
    {
        return $this->delete_data(Reservation::class, $reservation_id, 'reservations.index', 'تم حذف الحجز  ');
   }
}