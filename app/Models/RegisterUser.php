<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    use HasFactory;

    protected $fillable = [
        "form_number", 
        "name", 
        "date_of_birth",
        "gender",
        "membership_status",
        "student_number",
        "course",
        "image",
        "email",
        "phone_number",
        "residential_address",
        "skills",
        "accept",
        "terms"
    ];
}
