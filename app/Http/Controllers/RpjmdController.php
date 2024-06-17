<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rpjmd;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class RpjmdController extends Controller
{
    //
    public function index(): Response{
        $rpjmds = Rpjmd::all();
        return Inertia::render("Rpjmd",[
            "rpjmds"=> $rpjmds
    ]);
    }

    public function store(Request $request):RedirectResponse{
        $validator = Validator::make($request->all(),[
            "misi" => "required",
            "tujuan"=> "required",
            "indikator_tujuan"=> "required",
            "sasaran" => "required",
            "indikator_sasaran"=> "required",
            "governance"=> "",
            "branding"=> "",
            "economy"=> "",
            "living" => "",
            "society" => "",
            "environment"=> "",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $rpjmd = Rpjmd::create([
            "misi" => $request->misi,
            "tujuan" => $request->tujuan,
            "indikator_tujuan" => $request->indikator_tujuan,
            "sasaran" => $request->sasaran,
            "indikator_sasaran" => $request->indikator_sasaran,
            "governance" => $request->governance,
            "branding" => $request->branding,
            "economy"=> $request->economy,
            "living" => $request->living,
            "society"=> $request->society,
            "environment" => $request->environment,
        ]);

        return redirect()->route("rpjmd.index")->with("success","Data Berha    sil Ditambahkan");
    }

    public function update(Request $request,$id): RedirectResponse{
        $validator = Validator::make($request->all(),[
            "misi" => "required",
            "tujuan"=> "required",
            "indikator_tujuan"=> "required",
            "sasaran" => "required",
            "indikator_sasaran"=> "required",
            "governance"=> "",
            "branding"=> "",
            "economy"=> "",
            "living" => "",
            "society" => "",
            "environment"=> "",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $rpjmd = Rpjmd::find($id);

        $rpjmd->update([
            "misi" => $request->misi,
            "tujuan" => $request->tujuan,
            "indikator_tujuan" => $request->indikator,
            "sasaran" => $request->sasaran,
            "indikator_sasaran" => $request->indikator_sasaran,
            "governance" => $request->governance,
            "branding" => $request->branding,
            "economy"=> $request->economy,
            "living" => $request->living,
            "society"=> $request->society,
            "environment" => $request->environment,
        ]);

        return redirect()->route("rpjmd")->with("success","Data berhasil di Update");

    }

    public function destroy(Request $request, $id): RedirectResponse{
        $rpjmd = Rpjmd::find($id);
        $rpjmd->delete();

        return redirect()->route("rpjmd")->with("success","Data Berhasil di Hapus");
    }
}
