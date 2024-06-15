<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingAplikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_aplikasi","daerah","provinsi","logo","login","lokasi","lokasi_gambar"
    ];

    public function getPictFileAttribute()
    {
        return url('/storage/' . $this->attributes['lokasi_gambar']);
    }

    public function toArray() 
    {
        $data = parent::toArray();
        $data['lokasi_gambar'] = $this->getPictFileAttribute();
        return $data;
    }

}
