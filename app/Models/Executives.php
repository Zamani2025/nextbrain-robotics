<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executives extends Model
{
    use HasFactory;

    protected $table = "executives";

    protected $fillable = ["name", "position", "image"];
}
