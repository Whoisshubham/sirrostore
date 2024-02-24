<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Validator;

class CategoriesController extends Controller
{
    public function index()
    {
        $categorieList = Categorie::get();
        return view('Backend.categories.index', compact('categorieList'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required|unique:categories,name",
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name);
        $slug = strtolower($slug);

        $store = new Categorie;
        $store->name = $request->name ?? null;
        $store->slug = $slug ?? null;
        $result = $store->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Added Succesfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong"
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
        $statusUpdate = Categorie::find($id);
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

    public function edit($categorieId)
    {
        $categorieId = base64_decode($categorieId);
        $categorieData = Categorie::find($categorieId);
        if ($categorieData !== null) {
            return view('Backend.categories.edit', compact('categorieData'));
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseData" => "Somthing Went Wrong!"
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => "required|unique:categories,name," . $id,
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name);
        $slug = strtolower($slug);

        $store = Categorie::find($id);
        if ($store !== null) {
            $store->name = $request->name ?? null;
            $store->slug = $slug ?? null;
            $store->header = $request->header ?? null;
            $store->description = $request->description ?? null;
            $result = $store->save();
            if ($result) {
                return response()->json([
                    "responseCode" => 200,
                    "responseMessage" => "Updated Succesfully!",
                    "responseUrl" => url()->previous()
                ]);
            } else {
                return response()->json([
                    "responseCode" => 403,
                    "responseMessage" => "Somthing Went Wrong"
                ]);
            }

        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong"
            ]);
        }
    }
}
