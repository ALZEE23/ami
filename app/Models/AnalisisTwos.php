<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisTwos extends Model
{
    use HasFactory;
    protected $fillable = [
        "kategori","kekuatan","kelemahan","peluang","strategi_peluang_kekuatan","startegi_kelemahan_peluang","ancaman","strategi_ancaman_kekuatan","strategi_kelemahan_ancaman",
    ];
}
