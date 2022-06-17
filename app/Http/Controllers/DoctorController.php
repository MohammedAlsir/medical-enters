<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Workday;
use App\Traits\Oprations;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    use Oprations;

    // == Funcion Return Doctors View ==
    public function index()
    {
        return $this->index_data(Doctor::class, 'doctors.index');
    }

    // == Funcion Create Doctor  ==
    public function create()
    {
        return $this->create_date('doctors.create');
    }

    // == Funcion Store New Doctor  ==
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'        => 'required',
            'phone'        => 'required',
            'price'        => 'required'
        ));
        // حفظ بيانات الطبيب
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->price = $request->price;
        $doctor->save();
        // حفظ ايام العمل
        foreach ($request->day as $index => $day) {
            if ($request->from[$index] != '' && $request->to[$index] != '') {
                $days = new Workday();
                $days->day  = $day;
                $days->from = $request->from[$index];
                $days->to  = $request->to[$index];
                $days->doctor_id = $doctor->id;
                $days->save();
            }
        }

        toast('تم إضافة الطبيب ', 'success');
        return redirect()->route('doctors.index');
    }


    public function show($id)
    {
        //
    }

     // == Funcion Return  Doctor View Edit ==
    public function edit($id)
    {
        $st     = Workday::where('doctor_id', $id);
        $sun    = Workday::where('doctor_id', $id);
        $mon    = Workday::where('doctor_id', $id);
        $tue    = Workday::where('doctor_id', $id);
        $wed    = Workday::where('doctor_id', $id);
        $thu    = Workday::where('doctor_id', $id);
        $fri    = Workday::where('doctor_id', $id);

        $item = Doctor::find($id);
        return view('doctors.edit', compact(
            'item',
            'st',
            'sun',
            'mon',
            'tue',
            'wed',
            'thu',
            'fri',
        ));
    }

    // == Funcion Update Doctor Data  ==
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name'        => 'required',
            'phone'        => 'required',
            'price'        => 'required'
        ));
        // حفظ بيانات الطبيب
        $doctor =  Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->price = $request->price;
        $doctor->save();
        // حذف كل الايام السابقة
        Workday::where('doctor_id', $id)->delete();
        // حفظ ايام العمل
        foreach ($request->day as $index => $day) {
            if ($request->from[$index] != '' && $request->to[$index] != '') {
                $days = new Workday();
                $days->day  = $day;
                $days->from = $request->from[$index];
                $days->to  = $request->to[$index];
                $days->doctor_id = $doctor->id;
                $days->save();
            }
        }

        toast('تم تعديل بيانات الطبيب ', 'success');
        return redirect()->route('doctors.index');
    }

     // == Funcion Delete Doctor ==
    public function destroy($id)
    {
        //
    }
}