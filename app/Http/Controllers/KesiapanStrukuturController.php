<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\KesiapanStruktur;
class KesiapanStrukuturController extends Controller
{
    //
    public function index(Request $request): Response{
        $kesiapans = KesiapanStruktur::all();
        return Inertia::render("", [
            "kesiapans"=> $kesiapans
        ]);
    }

    public function store(Request $request): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "komponen"=> "required",
            "kondisi"=> "required",
            "baik" => "required",
            "sedang"=> "required",
            "buruk"=> "required",
        ]);

        $kesiapan = KesiapanStruktur::create([
            "kategori"=> $request->kategori,
            "komponen"=> $request->kondisi,
            "kondisi"=> $request->konidisi,
            "baik"=> $request->baik,
            "sedang"=> $request->sedang,
            "buruk"=> $request->buruk,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Tambahkan");

    }

    public function update(Request $request, KesiapanStruktur $kesiapan): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "komponen"=> "required",
            "kondisi"=> "required",
            "baik" => "required",
            "sedang"=> "required",
            "buruk"=> "required",
        ]);

        $kesiapan->find($kesiapan->id)->update([
            "kategori"=> $request->kategori,
            "komponen"=> $request->kondisi,
            "kondisi"=> $request->konidisi,
            "baik"=> $request->baik,
            "sedang"=> $request->sedang,
            "buruk"=> $request->buruk,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Update");
    }

    public function destroy(Request $request,KesiapanStruktur $kesiapan): RedirectResponse{
        $kesiapan->find($kesiapan->id)->delete();
        return redirect()->route("")->with("success","Data Berhasil di Hapus");
    }
}
