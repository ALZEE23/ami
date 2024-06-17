<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisKesenjangan extends Model
{
    use HasFactory;

    protected $fillable = [
        "dimensi","kondisi","tren","gap"
    ];
}
