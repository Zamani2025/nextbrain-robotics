<?php

namespace App\Http\Livewire;

use App\Models\RegisterUser;
use Carbon\Carbon;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterComponent extends Component
{
    use WithFileUploads;
    
    public $formNumber;
    public $name;
    public $date_of_birth;
    public $gender;
    public $status;
    public $student_number;
    public $course;
    public $image;
    public $email;
    public $telephone;
    public $address;
    public $accept;
    public $skills = [];
    public $terms;

    public function mount()
    {
        # code..
        $this->formNumber =  rand(1000, 9000);
    }


    public $rules = [
        "formNumber" => "max:4",
        "name"=> "required|max:50", 
        "date_of_birth"=> "required",
        "gender"=> "required",
        "status"=> "required",
        "student_number"=> "required",
        "course"=>"required",
        "image"=> "required|image|mimes:png,jpg,jpeg",
        "email"=> "email|required",
        "telephone"=> "required",
        "address"=> "required",
        "skills"=> "required",
        "accept"=> "required",
        "terms"=> "required"

    ];

    public function registerUser()
    {
        # code...
        $validData = $this->validate();
        // dd($validData);
        $user = new RegisterUser();
        $user->formNumber = $this->formNumber;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->status = $this->status;
        $user->telephone = $this->telephone;
        $user->gender = $this->gender;
        $user->date_of_birth = $this->date_of_birth;
        $user->student_number = $this->student_number;
        $user->course = $this->course;
        $imageName = Carbon::now()->timestamp . "." . $this->image->extension();
        $this->image->storeAs("users", $imageName);
        $user->image =  $imageName;
        $user->address = $this->address;
        $user->skills = $this->skills;
        $user->accept = $this->accept;
        $user->terms = $this->terms;

        $user->save();
        toastr()->success("Registered successfully");

        return redirect()->route("home");
    }

    public function render()
    {
        $random = rand(1000, 9000);
        return view('livewire.register-component', compact("random"))->layout("layouts.register");
    }
}
