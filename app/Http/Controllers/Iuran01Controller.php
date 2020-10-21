<?php

namespace App\Http\Controllers;

use App\Warga01;
use App\Iuran01;
use Illuminate\Http\Request;

class Iuran01Controller extends Controller
{
    public function index() {
        $iuran01 = Iuran01::with(['warga01'])->get();
        return view('iuran01.index', compact('iuran01'));
    }

    public function store(Request $request) {
        $iuran01 = new Iuran01([
            'nominal' => $request->nominal,
            'jenis_iuran' => $request->jenis_iuran,
            'keterangan' => $request->keterangan,
        ]);
        
        $warga01 = Warga01::find($request->warga01);

        $iuran01->warga01()->associate($warga01);
        $iuran01->save();

        return redirect()->route('iuran01.index');
    }

    public function create()
    {
        $warga01 = Warga01::all();
        return view('iuran01.create', compact('warga01'));
    }

    public function edit(Iuran01 $iuran01) {
        return view('iuran01.edit', compact('iuran01'));
    }

    public function update(Request $request, Iuran01 $iuran01) {
        $iuran01->nominal = $request->nominal;
        $iuran01->jenis_iuran = $request->jenis_iuran;
        $iuran01->keterangan = $request->keterangan;
        $iuran01->save();

        return redirect()->route('iuran01.index')->with('status','Warga RT 01 updated!')->with('success', true);
    }

    public function destroy(Iuran01 $iuran01) {
        $iuran01->delete();
        return redirect()->route('iuran01.index')->with('Warga RT 01 deleted!')->with('success', true);
    }

    public function laporan()
    {
        $iuran01 = Iuran01::with(['warga01'])->get();
        return view('laporan_keuangan01.index', compact('iuran01'));
    }
}

