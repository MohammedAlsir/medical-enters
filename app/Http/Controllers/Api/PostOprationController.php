<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\User;
use App\Traits\ApiMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PostOprationController extends Controller
{
    use ApiMessage;

    /*
        == edit profile function ==
    */
    public function profile(Request $request)
    {
        // == begin ==
        $user = User::find(Auth::user()->id);
        $data = $request->validate([
            'name' => '',
            'email' => ['email', Rule::unique('users')->ignore($user)],
            'password' => '',
            'photo' => '',
        ]);
        $user->update($data);

        return $this->returnData('user', $user, '', 'تم تعديل البيانات الشخصية بنجاح');
        // == end ==
    }


    /*
        == add new reservations function ==
    */
    public function reservations(Request $request)
    {
        // == begin ==
        // == check data ==
        $validator = Validator::make(
            $request->all(),
            [
                'doctor_id' => 'required|exists:doctors,id',
                'patient_id' => 'required|exists:patients,id',
                'medical_center_id' => 'required|exists:medical_centers,id',
            ]
        );
        // == check data ==
        if ($validator->fails())
            return $this->returnMessage(false, $validator->errors()->all(), 422);
        // == add new reservations  ==
        $reservations = Reservation::create($request->toArray());
        return $this->returnData('reservations', $reservations, '', 'تم إضافة الحجز بنجاح');
        // == end ==
    }
}