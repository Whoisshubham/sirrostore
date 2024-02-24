<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Countrie;
use App\Models\State;
use Illuminate\Http\Request;
use Validator;

class CountrieController extends Controller
{
    public function countries()
    {
        $countrieList = Countrie::orderBy('id', 'DESC')->get();
        return view('Backend.develery.countrie', compact('countrieList'));
    }


    public function countries_add()
    {
        return view('Backend.develery.countrie_add');
    }


    public function countries_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|unique:countries,name,"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "reponseMessage" => $validator->errors()->first()
            ]);
        }

        $storeCountrie = new Countrie;
        $storeCountrie->name = $request->name ?? null;
        $result = $storeCountrie->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Save Successfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "somthing went wrong!"
            ]);
        }
    }


    public function states()
    {
        $stateList = State::with(['countriesName'])->orderBy('id', 'DESC')->get();
        return view('Backend.develery.state', compact('stateList'));
    }


    public function states_add()
    {
        $countrieList = Countrie::orderBy('id', 'DESC')->get();
        return view('Backend.develery.state_add', compact('countrieList'));
    }


    public function states_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "countries_id" => "required",
            "name" => "required|unique:states,name,"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "reponseMessage" => $validator->errors()->first()
            ]);
        }

        $storeCountrie = new State;
        $storeCountrie->countries_id = $request->countries_id ?? null;
        $storeCountrie->name = $request->name ?? null;
        $result = $storeCountrie->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Save Successfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "somthing went wrong!"
            ]);
        }
    }
    public function city()
    {
        $citiesList = Cities::with(['countriesName', 'statesName'])->orderBy('id', 'DESC')->get();
        return view('Backend.develery.cities', compact('citiesList'));
    }



    public function city_add()
    {
        $countrieList = Countrie::whereStatus(1)->get(['id', 'name']);
        return view('Backend.develery.cities_add', compact('countrieList'));
    }



    public function stateList($countryId)
    {
        $stateList = State::whereStatus(1)->where('countries_id', $countryId)->get(['id', 'name']);
        if ($stateList !== null) {
            return response()->json([
                "responseCode" => 200,
                "responseData" => $stateList
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseData" => "Somthing Went Wrong!"
            ]);
        }

    }

    public function city_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "countries_id" => "required",
            "states_id" => "required",
            "pincode" => "required|unique:cities,pincode",
            "name" => "required|unique:cities,name,"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "reponseMessage" => $validator->errors()->first()
            ]);
        }

        $citiesStore = new Cities;
        $citiesStore->countries_id = $request->countries_id ?? null;
        $citiesStore->states_id = $request->states_id ?? null;
        $citiesStore->pincode = $request->pincode ?? null;
        $citiesStore->name = $request->name ?? null;
        $result = $citiesStore->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Save Successfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "somthing went wrong!"
            ]);
        }
    }

    public function getCity($stateId)
    {
        $stateList = Cities::whereStatus(1)->where('states_id', $stateId)->get(['id', 'name']);
        if ($stateList !== null) {
            return response()->json([
                "responseCode" => 200,
                "responseData" => $stateList
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseData" => "Somthing Went Wrong!"
            ]);
        }
    }

    public function getPincode($pincode)
    {
        $cityData = Cities::with(['countriesName', 'statesName'])->whereStatus(1)->where('pincode', $pincode)->first();
        if ($cityData == null) {
            return response()->json([
                "responseCode" => 403,
                "responseData" => "Somthing Went Wrong!"
            ]);
        } else {
            return response()->json([
                "responseCode" => 200,
                "responseData" => $cityData
            ]);

        }
    }
}
