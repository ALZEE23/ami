<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SasaranSmart extends Model
{
    use HasFactory;

    protected $fillable = [
        "kategori","dimensi","sub_dimensi","sasaran","dasar"
    ] ;
}
