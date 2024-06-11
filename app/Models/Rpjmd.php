<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rpjmd extends Model
{
    use HasFactory;

    protected $fillable = [
        "misi","tujuan","indikator_tujuan","sasaran","indikator_sasaran","governance","branding","economy","living","society","environment"
    ];
}
