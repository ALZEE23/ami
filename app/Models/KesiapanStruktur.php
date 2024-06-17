<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesiapanStruktur extends Model
{
    use HasFactory;
    protected $fillable = [
        "kategori","komponen","kondisi","baik","sedang","buruk",
    ];
}
