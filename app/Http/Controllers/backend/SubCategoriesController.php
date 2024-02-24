<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SubCategorie;
use Illuminate\Http\Request;
use Validator;

class SubCategoriesController extends Controller
{
    public function index()
    {
        $categorieList = Categorie::get();
        $subCategorieList=SubCategorie::with(['categoryName'])->get();
        return view('Backend.sub-categorie.index', compact('categorieList','subCategorieList'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categorie_id' => "required|integer",
            'name' => "required|unique:sub_categories,name"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name);
        $slug = strtolower($slug);

        $store = new SubCategorie;
        $store->categorie_id = $request->categorie_id ?? null;
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
        $statusUpdate = SubCategorie::find($id);
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

    public function edit($subCategory)
    {
        $subCategory = base64_decode($subCategory);
        $subCategory = SubCategorie::find($subCategory);
        $categorieList = Categorie::get();
        if ($subCategory !== null) {
            return view('Backend.sub-categorie.edit', compact('subCategory','categorieList'));
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
            'categorie_id' => "required",
            'name' => "required|unique:sub_categories,name," . $id,
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name);
        $slug = strtolower($slug);

        $store = SubCategorie::find($id);
        if ($store !== null) {
            $store->categorie_id = $request->categorie_id ?? null;
            $store->name = $request->name ?? null;
            $store->slug = $slug ?? null;
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
