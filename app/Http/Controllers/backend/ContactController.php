<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('Frontend.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => $validator->errors()->first()
            ]);
        }
        $contactStore = new Contact;
        $contactStore->name = $request->name ?? null;
        $contactStore->email = $request->email ?? null;
        $contactStore->subject = $request->subject ?? null;
        $contactStore->number = $request->number ?? null;
        $contactStore->message = $request->message ?? null;
        $result = $contactStore->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Sent Successfully",
                "responseUrl" => url()->previous()
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }
    }
    public function adminContact()
    {
        $contactList = Contact::orderBy('id', 'DESC')->get();
        return view('Backend.contact.index', compact('contactList'));
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
        $statusUpdate = Contact::find($id);
        if ($statusUpdate->status == 1) {
            $statusUpdate->status = 0;
        } else {
            $statusUpdate->status = 1;
        }
        $result = $statusUpdate->save();
        if ($result) {
            return response()->json([
                "responseCode" => 200,
                "responseMessage" => "Mark As Read Successfully!",
            ]);
        } else {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Somthing Went Wrong!"
            ]);
        }

    }

    public function destory($id)
    {
        if ($id == null) {
            return response()->json([
                "responseCode" => 403,
                "responseMessage" => "Id is required!"
            ]);
        }
        $id = base64_decode($id);
        $contactDetails = Contact::find($id);
        $result = $contactDetails->destroy($id);
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
