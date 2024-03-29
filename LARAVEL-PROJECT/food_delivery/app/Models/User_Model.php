<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Model extends Model
{
    use HasFactory;
    protected $table = "user";
    protected $primary = "id";

    protected $fillable = [
        "name","email","password","date"
    ];
}
