<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisSwot extends Model
{
    use HasFactory;
    protected $fillable = [
        "kategori","kekuatan","kelemahan","peluang","ancaman"
    ];
}
