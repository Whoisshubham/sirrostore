<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryPhotos;
use Illuminate\Http\Request;
use Validator;
use Storage;
use File;

class GalleryController extends Controller
{
    public function index()
    {
        $galleryList = Gallery::orderBy("id", "DESC")->get();
        return view('Backend.gallery.index', compact('galleryList'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|min:5|max:30|unique:galleries,name",
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $storeGallery = new Gallery;
        $storeGallery->name = $request->name ?? null;
        $storeGallery->slug = $slug ?? null;
        $result = $storeGallery->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Save Succesfully!",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }
    }
    public function view($slug)
    {
        $getData = Gallery::whereSlug($slug)->first();
        if ($getData == null) {
            return redirect()->back();
        }
        $photosList = GalleryPhotos::where('gallery_id', $getData->id)->get();

        return view('Backend.gallery.view', compact('getData', 'photosList'));
    }

    public function upload(Request $request, $slug)
    {
        $galleryId = Gallery::whereSlug($slug)->first();
        if ($galleryId == null) {
            return response()->back()->with('error', "Somthing Went Wrong!");
        }
        foreach ($request->image as $key => $value) {
            $image = $value;
            $imageInfo = explode(";base64,", $image);
            $imgExt = str_replace('data:image/', '', $imageInfo[0]);
            $image = str_replace(' ', '+', $imageInfo[1]);
            $imageName = "post-" . $key . time() . "." . $imgExt;
            Storage::disk('import_image')->put($imageName, base64_decode($image), ['disk' => 'public_uploads']);
            $galleryImage = new GalleryPhotos;
            $galleryImage->gallery_id = $galleryId->id;
            $galleryImage->image = "/product_import" . "/" . $imageName;
            $galleryImage->save();
        }
        return redirect()->back()->with('success', "Uploaded Successfully!");

    }
    public function unlink($id)
    {
        $galleryPhotos = GalleryPhotos::find($id);
        if ($galleryPhotos == null) {
            return redirect()->back()->with('error', "Somthing Went Wrong!");
        }
        if (File::exists(public_path($galleryPhotos->image))) {
            File::delete(public_path($galleryPhotos->image));
        }
        $result = $galleryPhotos->destroy($id);
        if ($result) {
            return redirect()->back()->with('success', "Deleted Successfully!");
        }
        return redirect()->back()->with('error', "Somthing Went Wrong!");


    }
}
