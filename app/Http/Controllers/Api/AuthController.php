<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use ApiMessage;
    /*
        == Login function ==
        == Receive email & password  ==
    */
    public function login(Request $request)
    {   // == Validate data ==
        $data = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:8'
        ]);

        // == begin attempt ==
        if (Auth::attempt($data)) {
            // == Create Token ==
            $token = auth()->user()->createToken('medicalCentersToken')->accessToken;
            //  == return user data with token ==
            return $this->returnData('user', auth()->user(), $token);
        } else
            // == there is error ==
            return $this->returnMessage(false, 'عفوا , هناك خطأ في كلمة المرور او البريد الالكتروني ', 401);
        // == end attempt ==
    }


    /*
        == Login function ==
        == Receive name & email & password  ==
    */
    public function register(Request $request)
    {   // == Validate user date ==
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required|string|max:255',
                'email'     => 'required|string|email|max:255|unique:users',
                'password'  => 'required|string|min:8|confirmed',
            ]
        );
        // == check data ==
        if ($validator->fails())
            return $this->returnMessage(false, $validator->errors()->all(), 422);
        // == add new user  ==
        $user = User::create($request->toArray());
        $token = $user->createToken('medicalCentersNewUserToken')->accessToken;
        // == return user data with token ==
        return $this->returnData('user', $user, $token);
    }
}
