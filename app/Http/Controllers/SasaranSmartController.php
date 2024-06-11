<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SasaranSmart;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;

class SasaranSmartController extends Controller
{
    //
    public function index(): Response{
        $sasarans = SasaranSmart::all();
        return Inertia::render("sasaranSmart", [
            "sasaran"=> $sasarans
        ]);
    }

    public function store(Request $request): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "dimensi"=> "required",
            "sub_dimensi"=> "required",
            "sasaran"=> "required",
            "dasar"=> "required",
        ]);

        $sasaran = SasaranSmart::create([
            "kategori" => $request->kategori,
            "dimensi"=> $request->dimensi,
            "sub_dimensi"=> $request->sub_dimensi,
            "sasaran" => $request->sasaran,
            "dasar"=> $request->dasar,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Tambahkan");
    }

    public function update(Request $request, SasaranSmart $sasaran): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "dimensi"=> "required",
            "sub_dimensi"=> "required",
            "sasaran"=> "required",
            "dasar"=> "required",
        ]);

        $sasaran->find($sasaran->id)->update([
            "kategori" => $request->kategori,
            "dimensi"=> $request->dimensi,
            "sub_dimensi"=> $request->sub_dimensi,
            "sasaran" => $request->sasaran,
            "dasar"=> $request->dasar,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Update");
    }    

    public function destroy(Request $request, SasaranSmart $sasaran): RedirectResponse{
        $sasaran->find($sasaran->id)->delete();

        return redirect()->route("")->with("success","Data Berhasil di Hapus");
    }
}
