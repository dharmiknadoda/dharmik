<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Model extends Model
{
    use HasFactory;
    protected $table = "order";
    protected $primary = "id";

    protected $fillable = [
        "name","price","quantity","address","total"
    ];
}
