<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Gap;

class GapController extends Controller
{
    //
    public function index(Request $request): Response{
        $gaps = Gap::all();
        return Inertia::render("", [
            "gaps"=> $gaps
        ]);
    } 

    public function store(Request $request):RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "subdimensi"=> "required",
            "indikator"=> "required",
            "satuan"=> "required",
            "eksisting"=> "required",
            "target"=> "required",
            "gap"=> "required",
        ]);

        $gap = Gap::create([
            "kategori" => $request->kategori,
            "subdimensi"=> $request->subdimensi,
            "indikator"=> $request->indikator,
            "satuan"=> $request->satuan,
            "eksisting"=> $request->eksisting,
            "target"=> $request->target,
            "gap"=> $request->gap,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Tambahkan");
    }
    
    public function update(Request $request, Gap $gap): RedirectResponse{
        $request->validate([
            "kategori"=> "required",
            "subdimensi"=> "required",
            "indikator"=> "required",
            "satuan"=> "required",
            "eksisting"=> "required",
            "target"=> "required",
            "gap"=> "required",
        ]);

        $gap->find($gap->id)->update([
            "kategori" => $request->kategori,
            "subdimensi"=> $request->subdimensi,
            "indikator"=> $request->indikator,
            "satuan"=> $request->satuan,
            "eksisting"=> $request->eksisting,
            "target"=> $request->target,
            "gap"=> $request->gap,
        ]);

        return redirect()->route("")->with("success","Data Berhasil di Update");

    }

    public function destroy(Request $request, Gap $gap): RedirectResponse{{
        $gap->find($gap->id)->delete();
        return redirect()->route("")->with("success","Data Berhasil di Delete");
    }
}
}