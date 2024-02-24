<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;

class UserRegisterController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => "required|string|min:3|max:40",
            'last_name' => "required|string|min:3|max:40",
            'email' => "required|email|unique:users,email",
            "password" => 'required|min:5|max:20',
            "confirm_password" => "required|same:password"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }

        $storeUser = new User;
        $storeUser->fname = $request->first_name ?? null;
        $storeUser->lname = $request->last_name ?? null;
        $storeUser->email = $request->email ?? null;
        $storeUser->password = Hash::make($request->password) ?? null;
        $result = $storeUser->save();
        if ($result) {
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Register User Succesfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }

    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => "required",
            "password" => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "User Login Succesfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Wrong Credintials!",
            ]);
        }


    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function passswordChange(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "password" => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        $userPassword = User::find(auth()->user()->id)->first();
        $userPassword->password = Hash::make($request->password);
        $result = $userPassword->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Password Changed Succesfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!",
            ]);
        }
    }
}
