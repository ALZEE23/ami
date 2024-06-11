<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Opd;
use Inertia\Inertia;
use Inertia\Response;

class OpdController extends Controller
{
    //
    public function index(): Response{
        $opds = Opd::all();
        return Inertia::render("opd", [
            "opds"=> $opds
        ]);
    }

    public function store(Request $request): RedirectResponse{
        $request->validate([
            "provinsi"=> "required",
            "daerah"=> "required",
            "opd"=> "required",
        ]);

        $opd = Opd::create([
            "provinsi"=> $request->provinsi,
            "daerah"=> $request->daerah,
            "opd"=> $request->opd,
        ]);
        return redirect()->route("opd")->with("success","Data Berhasil di Tambahkan");
    }


    public function update(Request $request, opd $opd): RedirectResponse{
        $request->validate([
            "provinsi"=> "required",
            "daerah"=> "required",
            "opd"=> "required",
        ]);

        $opd = Opd::find($opd->id);

        $opd->update([
            "provinsi"=> $request->provinsi,
            "daerah"=> $request->daerah,
            "opd"=> $request->opd,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Update");
    }
}
