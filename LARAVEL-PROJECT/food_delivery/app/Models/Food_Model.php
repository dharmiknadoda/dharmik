<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_Model extends Model
{
    use HasFactory;
    protected $table = "food";
    protected $primary = "id";

    protected $fillable = [
        "name","price","quantity","details","date","img"
    ];
}
