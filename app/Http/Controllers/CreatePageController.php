<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Validator;

class CreatePageController extends Controller
{
    public function index()
    {
        $pagesList = Pages::get();
        return view('Backend.pages.index', compact('pagesList'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "page_name" => "required|unique:pages,name,"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->page_name)));
        $store = new Pages;
        $store->name = $request->page_name;
        $store->header = $request->header ?? null;
        $store->support = $request->suppot ?? null;
        $store->about = $request->about ?? null;
        $store->slug = $slug ?? null;
        $result = $store->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Added Successfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }
    }

    public function contentAdd($id)
    {
        $pageContent = Pages::find($id);
        return view('Backend.pages.content', compact('id', 'pageContent'));

    }
    public function delete($id)
    {
        $deletePage = Pages::find($id);
        if ($deletePage == null) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }
        $result = $deletePage->destroy($id);
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Delete Succesfully!"
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }

    }
    public function pageContent(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "page_content" => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->page_name)));
        $storeContent = Pages::find($id);
        $storeContent->name = $request->page_name;
        $storeContent->header = $request->header ?? null;
        $storeContent->support = $request->suppot ?? null;
        $storeContent->about = $request->about ?? null;
        $storeContent->slug = $slug ?? null;
        $storeContent->content = $request->page_content ?? null;
        $result = $storeContent->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Added Successfully!",
                "responseUrl" => url('admin/create-page')
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }
    }


}
