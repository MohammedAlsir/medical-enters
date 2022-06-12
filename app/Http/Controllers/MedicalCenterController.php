<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalCenterRequest;
use App\Models\MedicalCenter;
use App\Traits\Oprations;
use Illuminate\Http\Request;

class MedicalCenterController extends Controller
{
    use Oprations;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->index_data(MedicalCenter::class, 'medical_centers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->create_date('medical_centers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicalCenterRequest $request)
    {
        return $this->store_data(MedicalCenter::class, $request, 'medical_center.index', 'تم إضافة المركز الصحي ');
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
        return $this->edit_data(MedicalCenter::class, $id, 'medical_centers.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicalCenterRequest $request, $id)
    {
        return $this->update_data(MedicalCenter::class, $request, $id, 'medical_center.index', 'تم تعديل بيانات المركز الصحي ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->delete_data(MedicalCenter::class, $id, 'medical_center.index', 'تم حذف المركز الصحي ');
    }
}
