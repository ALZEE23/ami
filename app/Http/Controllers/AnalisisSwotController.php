<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\AnalisisSwot;


class AnalisisSwotController extends Controller
{
    //
    public function index(Request $request): Response{
        $analisis = AnalisisSwot::all();
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
            "ancaman"=> "required",
        ]);

        $analis = AnalisisSwot::create([
            "kategori" => $request->kategori,
            "kekuatan"=> $request->kekuatan,
            "kelemahan"=> $request->kelemahan,
            "peluang"=> $request->peluang,
            "ancaman"=> $request->ancaman,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Tambahkan");
    }

    public function update(Request $request, AnalisisSwot $analis): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "kekuatan"=> "required",
            "kelemahan"=> "required",
            "peluang"=> "required",
            "ancaman"=> "required",
        ]);

        $analis->find($analis->id)->update([
            "kategori" => $request->kategori,
            "kekuatan"=> $request->kekuatan,
            "kelemahan"=> $request->kelemahan,
            "peluang"=> $request->peluang,
            "ancaman"=> $request->ancaman,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Update");
    }

    public function destroy(Request $request, AnalisisSwot $analis): RedirectResponse{
        $analis->find($analis->id)->delete();
        return redirect()->route("")->with("success","Data Behasil di Hapus");
    }
}
