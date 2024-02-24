<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('Backend.login');
    }
    public function loginAuth(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => "required|email",
            "password" => "required|min:5|max:25"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => "403",
                "responseMessage" => $validator->errors()->first(),
            ]);
        }
        $credintioals = array('email' => $request->email, 'password' => $request->password);
        if (Auth::guard('admin')->attempt($credintioals)) {

            return response()->json([
                "responseCode" => "200",
                "responseMessage" => "Login Succesfully!",
                "responseUrl" => url('admin/dashboard'),

            ]);

        } else {
            return response()->json([
                "responseCode" => "403",
                "responseMessage" => "Wrong Credintials!",
            ]);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
