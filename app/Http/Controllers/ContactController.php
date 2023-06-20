<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {

        $request->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "message" => ["required"],
        ]);
        if($this->isOnline()){
            $email_data = [
                "recipient" => "iddishani1@gmail.com",
                "fromEmail" => $request->email,
                "fromName" => $request->name,
                "subject" => "From Robotics Website",
                "body" => $request->message,
            ];
            \Mail::send('email-template', $email_data, function ($message) use ($email_data) {
                $message->to($email_data["recipient"]);
                $message->from($email_data["fromEmail"], $email_data["fromName"]);
                $message->subject($email_data["subject"]);
            });
            toastr()->success("Email successfully sent");
            return redirect()->back();
        }else {
            toastr()->error("Check your internet connection");
            return redirect()->route("contact");
        }

        return redirect()->back();
    }
    public function isOnline($site = "https://www.google.com")
    {
        # code...
        if(@fopen($site, "r")){
            return true;
        }else {
            return false;
        }
    }
}
