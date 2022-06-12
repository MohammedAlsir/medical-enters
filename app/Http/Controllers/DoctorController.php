<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Workday;
use App\Traits\Oprations;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    use Oprations;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->index_data(Doctor::class, 'doctors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->create_date('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
