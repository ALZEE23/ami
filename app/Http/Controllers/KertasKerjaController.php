<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;
use App\Models\KertasKerja;
use Illuminate\Http\RedirectResponse;

class KertasKerjaController extends Controller
{
    //
    public function index(): Response{
        $kerjas = KertasKerja::all();
        return Inertia::render("",[
            "kerjas"=> $kerjas
        ]
    );
    }

    public function store(Request $request): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "pertanyaan" => "required",
            "jawaban"=> "required",
        ]);

        $kerja = KertasKerja::create([
            "kategori"=> $request->kategori,
            "pertanyaan"=> $request->pertanyaan,
            "jawaban"=> $request->jawaban,
        ]);
        return redirect()->route("")->with("success","Data Berhasil di Tambahkan");

    }

    public function update(Request $request, KertasKerja $kerja): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "pertanyaan" => "required",
            "jawaban"=> "required",
        ]);

        $kerja->find($kerja->id)->update([
            "kategori"=> $request->kategori,
            "pertanyaan"=> $request->pertanyaan,
            "jawaban"=> $request->jawaban,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Update");
    }

    public function destroy(Request $request,KertasKerja $kerja): RedirectResponse{
        $kerja->find($kerja->id)->delete();
        return redirect()->route("")->with("success","Data Berhasil di Hapus");
    }
}
