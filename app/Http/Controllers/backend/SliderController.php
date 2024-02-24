<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Validator;
use File;

class SliderController extends Controller
{
    public function index()
    {
        $sliderList = Slider::get();
        return view('Backend.slider.add', compact('sliderList'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "image" => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "reponseCode" => 200,
                "reposneMessage" => $validator->errors()->first()
            ]);
        }
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time() . pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/slider');
            $image->move($destinationPath, $name);
            $file_path = "/slider" . "/" . $name;
        }
        $sliderStore = new Slider;
        $sliderStore->image = $file_path ?? null;
        $sliderStore->button_link = $request->button_link ?? null;
        $result = $sliderStore->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Added Succesfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Added Succesfully!"
            ]);
        }


    }

    public function status($id)
    {
        if ($id == null) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Id is required!"
            ]);
        }
        $id = base64_decode($id);
        $statusUpdate = Slider::find($id);
        if ($statusUpdate->status == 1) {
            $statusUpdate->status = 0;
        } else {
            $statusUpdate->status = 1;
        }
        $result = $statusUpdate->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Update Successfully!",
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id == null) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Id is required!"
            ]);
        }
        $id = base64_decode($id);
        $slider = Slider::find($id);
        if ($slider == null) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }

        if (file_exists(public_path($slider->image))) {
            unlink(public_path($slider->image));
        }
        $result = $slider->destroy($id);
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Delete Successfully!"
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }

    }
}
