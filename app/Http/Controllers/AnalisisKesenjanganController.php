<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use App\Models\AnalisisKesenjangan;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;

class AnalisisKesenjanganController extends Controller
{
    //
    public function index(): Response{
        $analisis = AnalisisKesenjangan::all();
        return Inertia::render("", [
            "analisis" => $analisis,
        ]);
    }

    public function store(Request $request): RedirectResponse{
        $request->validate([
            "dimensi" => "required",
            "kondisi" => "required",
            "tren"  => "required",
            "gap"=> "required",
        ]);

        $analis = AnalisisKesenjangan::create([
            "dimensi"=> $request->dimensi,
            "kondisi"=> $request->kondisi,
            "tren"=> $request->tren,
            "gap"=> $request->gap,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Tambahkan");
    }

    public function update(Request $request, AnalisisKesenjangan $analis): RedirectResponse{
        $request->validate([
            "dimensi" => "required",
            "kondisi" => "required",
            "tren"  => "required",
            "gap"=> "required",
        ]);

        $analis->find($analis->id)->update([
            "dimensi"=> $request->dimensi,  
            "kondisi"=> $request->kondisi,
            "tren"=> $request->tren,
            "gap"=> $request->gap,
        ]);

        return redirect()->route("")->with("success","");
    }
}
