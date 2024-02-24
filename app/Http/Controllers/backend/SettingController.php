<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Validator;

class SettingController extends Controller
{
    public function index()
    {
        $settingData = Setting::first();
        return view('Backend.setting.setting', compact('settingData'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "currency" => "required",
            "exchange_rate" => "required|min:1"
        ]);
        $settingStore = Setting::first();
        if ($settingStore == null) {

            if ($request->hasFile('logo')) {

                $image = $request->file('logo');
                $name = time() . 'logo.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/setting/image');
                $image->move($destinationPath, $name);
                $logo = "/setting/image" . "/" . $name;

            } else {
                $logo = null;
            }
            if ($request->hasFile('icon')) {
                $image = $request->file('icon');
                $name = time() . 'icon.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/setting/image');
                $image->move($destinationPath, $name);
                $icon = "/setting/image" . "/" . $name;
            } else {
                $icon = null;
            }
            $settingStore1 = new Setting;
            $settingStore1->website_name = $request->website_name ?? null;
            $settingStore1->logo = $logo ?? null;
            $settingStore1->currency = $request->currency ?? null;
            $settingStore1->exchange_rate = $request->exchange_rate ?? null;
            $settingStore1->fav_icon = $icon ?? null;
            $result = $settingStore1->save();
            if ($result) {
                return response()->json([
                    "responseCode" => 200,
                    "responseMessage" => "Save Succesfully!",
                    "responseUrl" => url()->previous()
                ]);
            } else {
                return response()->json([
                    "responseCode" => 403,
                    "responseMessage" => "Save Succesfully!"
                ]);
            }

        } else {


            if ($request->hasFile('logo')) {

                $image = $request->file('logo');
                $name = time() . 'logo.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/setting/image');
                $image->move($destinationPath, $name);
                $logo = "/setting/image" . "/" . $name;

            } else {
                $logo = $settingStore->logo;
            }
            if ($request->hasFile('icon')) {
                $image = $request->file('icon');
                $name = time() . 'icon.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/setting/image');
                $image->move($destinationPath, $name);
                $icon = "/setting/image" . "/" . $name;
            } else {
                $icon = $settingStore->fav_icon;
            }

            $settingStore->website_name = $request->website_name ?? null;
            $settingStore->logo = $logo ?? null;
            $settingStore->currency = $request->currency ?? null;
            $settingStore->exchange_rate = $request->exchange_rate ?? null;
            $settingStore->fav_icon = $icon ?? null;
            $result = $settingStore->save();

            if ($result) {
                return response()->json([
                    "responseCode" => 200,
                    "responseMessage" => "Save Succesfully!",
                    "responseUrl" => url()->previous()
                ]);
            } else {
                return response()->json([
                    "responseCode" => 403,
                    "responseMessage" => "Save Succesfully!"
                ]);
            }

        }


    }
}
