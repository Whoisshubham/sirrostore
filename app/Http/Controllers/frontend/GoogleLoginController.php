<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Hash;

class GoogleLoginController extends Controller
{
    public function index()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();


        $user = User::where('google_id', $googleUser->id)->where('email', $googleUser->email)->first();
        if ($user !== null) {

            if (Auth::login($user)) {
                return redirect('/')->with('loginSuccess', "Login Succesfully!");
            } else {
                return redirect('/')->with('authuser', "Somthing Went Wrong!");
            }

        } else {

            $userEmailCheck = User::where('email', $googleUser->email)->first();
            if ($userEmailCheck == null) {

                $passwordRand = rand(11111111, 99999999999);
                $password = Hash::make($passwordRand);
                $user = new User;
                $user->google_id = $googleUser->id;
                $user->fname = $googleUser->name;
                $user->email = $googleUser->email;
                $user->password = $password;
                $user->save();
                Auth::login($user);
                Auth::attempt(['google_id' => $googleUser->id, 'password' => $password]);
                return redirect('/')->with('loginSuccess', "Login Succesfully!");
            } else {
                return redirect('/')->with('already', "Email Already Used!");
            }

        }



    }
}
