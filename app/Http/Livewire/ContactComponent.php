<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $message;

    public $rules = [
        "name" => ["required"],
        "email" => ["required", "email"],
        "message" => ["required"],

    ];
    public function sendMessage()
    {
        $this->validate();
        $email_data = [
            "recipient" => "iddishani1@gmail.com",
            "fromEmail" => $this->email,
            "fromName" => $this->name,
            "subject" => "From Robotics Website",
            "body" => $this->message,
        ];

        \Mail::send('email-template', $email_data, function ($message) use ($email_data) {
            $message->to($email_data["recipient"]);
            $message->from($email_data["fromEmail"], $email_data["fromName"]);
            $message->subject($email_data["subject"]);
        });
        toastr()->success("Email successfully sent");
        return redirect()->route("contact");
        
    }

    public function render()
    {
        return view('livewire.contact-component')->layout("layouts.contact");
    }
}
