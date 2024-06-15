<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingAplikasi;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SettingAplikasiController extends Controller
{
    //
    public function index() : Response{
        $settings = SettingAplikasi::all();
        return Inertia::render("",[
            "settings"=> $settings,
        ]);
    }

    public function store(Request $request) : RedirectResponse{
        $request->validate([
            "nama_aplikasi"=> "required",
            "daerah"=> "required",
            "provinsi"=> "required",
            "logo"=> "required",
            "login"=> "required",
            "lokasi"=> "required",
            "lokasi_gambar"=> "required",
        ]);

        $imageName = time().'.'.$request->lokasi_gambar->extension();
    $path = $request->lokasi_gambar->storeAs('public/lokasi', $imageName);
$path = str_replace('public/', '', $path);

        $setting = SettingAplikasi::create([
            "nama_aplikasi" => $request->nama_aplikasi,
            "daerah" => $request->daerah,
            "provinsi"=> $request->provinsi,
            "logo"=> $request->logo,
            "login"=> $request->login,
            "lokasi"=> $request->lokasi,
            "lokasi_gambar"=> $request->$path,
        ]);
        
        return redirect()->route("")->with("success","Data Berhasil di Tambahkan");
    }

    public function update(Request $request,SettingAplikasi $setting) : RedirectResponse{
        $request->validate([
            "nama_aplikasi"=> "required",
            "daerah"=> "required",
            "provinsi"=> "required",
            "logo"=> "required",
            "login"=> "required",
            "lokasi"=> "required",
            "lokasi_gambar"=> "required",
        ]);

        $setting->find($setting->id)->update([
            "nama_aplikasi" => $request->nama_aplikasi,
            "daerah" => $request->daerah,
            "provinsi"=> $request->provinsi,
            "logo"=> $request->logo,
            "login"=> $request->login,
            "lokasi"=> $request->lokasi,
            "lokasi_gambar"=> $request->lokasi_gambar,
        ]);
        return redirect()->route("")->with("success","Data Berhasil di Update");
    }

    public function destroy(Request $request, SettingAplikasi $setting){
        $setting->find($setting->id)->delete();
        return redirect()->route("")->with("success","Data Berhasil di Hapus");
    }

    }
