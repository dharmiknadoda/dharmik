<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback_Model extends Model
{
    use HasFactory;
    protected $table = "feedback";
    protected $primary = "id";

    protected $fillable = [
        "name","email","feedback"
    ];
}
