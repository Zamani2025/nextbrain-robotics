<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        "form_number" => ["min:4"], 
        "name"=> ["required", "max:50"], 
        "date_of_birth"=> ["required"],
        "gender"=> ["required"],
        "membership_status"=>["required"],
        "student_number"=> ["required"],
        "course"=>["required"],
        "image"=>["required", "image", "mimes:png,jpg,jpeg"],
        "email"=>["email", "required"],
        "phone_number"=> ["required"],
        "residential_address"=> ["required"],
        "skills"=> ["required"],
        // "dues"=>["required"],
        "accept"=>["required"],
        "terms"=>["required"]
        ];
    }
}
