<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        //begin attempt
        if (Auth::attempt($data)) {
            $token = auth()->user()->createToken('CafeteriaToken')->accessToken;
            return response()->json([
                'token' => $token,
                'admin' => Auth::user(),
                'error' => false,
                'message_en' => '',
                'message_ar' => ''
            ], 200);
        } else {
            return response()->json([
                'error'     => true,
                'message_en'   => 'Sorry, there is an error in your phone or password',
                'message_ar'   => 'عفوا ، هناك خطأ في رقم الهاتف أو كلمة المرور الخاصة بك',
            ], 200);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        $request['password'] = Hash::make($request['password']);
        // $request['remember_token'] = Str::random(10);
        $user = User::create($request->toArray());
        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $response = ['token' => $token];
        return response($response, 200);
    }
}