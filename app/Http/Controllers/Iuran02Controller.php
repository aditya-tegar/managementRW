<?php

namespace App\Http\Controllers;

use App\Warga02;
use App\Iuran02;
use Illuminate\Http\Request;

class Iuran02Controller extends Controller
{
    public function index() {
        $iuran02 = Iuran02::with(['warga02'])->get();
        return view('iuran02.index', compact('iuran02'));
    }

    public function store(Request $request) {
        $iuran02 = new Iuran02([
            'nominal' => $request->nominal,
            'jenis_iuran' => $request->jenis_iuran,
            'keterangan' => $request->keterangan,
        ]);
        
        $warga02 = Warga02::find($request->warga02);

        $iuran02->warga02()->associate($warga02);
        $iuran02->save();

        return redirect()->route('iuran02.index');
    }

    public function create()
    {
        $warga02 = Warga02::all();
        return view('iuran02.create', compact('warga02'));
    }

    public function edit(Iuran02 $iuran02) {
        return view('iuran02.edit', compact('iuran02'));
    }

    public function update(Request $request, Iuran02 $iuran02) {
        $iuran02->nominal = $request->nominal;
        $iuran02->jenis_iuran = $request->jenis_iuran;
        $iuran02->keterangan = $request->keterangan;
        $iuran02->save();

        return redirect()->route('iuran02.index')->with('status','Warga RT 02 updated!')->with('success', true);
    }

    public function destroy(Iuran02 $iuran02) {
        $iuran02->delete();
        return redirect()->route('iuran02.index')->with('Warga RT 02 deleted!')->with('success', true);
    }

    public function laporan()
    {
        $iuran02 = Iuran02::with(['warga02'])->get();
        return view('laporan_keuangan02.index', compact('iuran02'));
    }
}

