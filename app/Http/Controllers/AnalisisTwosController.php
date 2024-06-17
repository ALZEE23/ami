<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;
use Inertia\Inertia;
use App\Models\AnalisisTwos;

class AnalisisTwosController extends Controller
{
    //
    public function index():Response{
        $analisis = AnalisisTwos::all();
        return Inertia::render("", [
            "analisis"=> $analisis
        ]);
    } 

    public function store(Request $request): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "kekuatan"=> "required",
            "kelemahan"=> "required",
            "peluang"=> "required",
            "strategi_peluang_kekuatan"=> "required",
            "strategi_kelemahan_peluang"=> "required",
            "ancaman"=> "required",
            "strategi_ancaman_kekuatan"=> "required",
            "strategi_kelemahan_ancaman"=> "required",

        ]);

    $analis = AnalisisTwos::create([
        "kategori" => $request->kategori,
        "kekuatan"=> $request->kekuatan,
        "kelemahan"=> $request->kelemahan,
        "peluang"=> $request->peluang,
        "strategi_peluang_kekuatan" => $request->strategi_peluang_kekuatan,
        "strategi_kelemahan_peluang" => $request->strategi_kelemahan_peluang,
        "ancaman"=> $request->ancaman,
        "strategi_ancaman_kekuatan"=> $request->strategi_ancaman_kekuatan,
        "strategi_kelemahan_ancaman"=> $request->strategi_kelemahan_ancaman,
    ]);


    return redirect()->route("")->with("success","Data Berhasil di Tambahkan");
    }

    public function update(Request $request, AnalisisTwos $analis): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "kekuatan"=> "required",
            "kelemahan"=> "required",
            "peluang"=> "required",
            "strategi_peluang_kekuatan"=> "required",
            "strategi_kelemahan_peluang"=> "required",
            "ancaman"=> "required",
            "strategi_ancaman_kekuatan"=> "required",
            "strategi_kelemahan_ancaman"=> "required",

        ]);
    }
}
