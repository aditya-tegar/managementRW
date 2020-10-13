<?php

namespace App\Http\Controllers;

use App\Datarw03;
use App\Iuranrw03;
use Illuminate\Http\Request;

class Iuranrw03Controller extends Controller
{
    public function index() {
        $iuranrw03 = Iuranrw03::with(['datarw03'])->get();
        return view('iuranrw03.index', compact('iuranrw03'));
    }

    public function store(Request $request) {
        $iuranrw03 = new Iuranrw03([
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
        ]);
        
        $datarw03 = Datarw03::find($request->datarw03);

        $iuranrw03->datarw03()->associate($datarw03);
        $iuranrw03->save();

        return redirect()->route('iuranrw03.index');
    }

    public function create()
    {
        $datarw03 = Datarw03::all();
        return view('iuranrw03.create', compact('datarw03'));
    }

    public function edit(Iuranrw03 $iuranrw03) {
        return view('iuranrw03.edit', compact('iuranrw03'));
    }

    public function update(Request $request, Iuranrw03 $iuranrw03) {
        $iuranrw03->nominal = $request->nominal;
        $iuranrw03->keterangan = $request->keterangan;
        $iuranrw03->save();

        return redirect()->route('iuranrw03.index')->with('status','Iuran RW 03 updated!')->with('success', true);
    }

    public function destroy(Iuranrw03 $iuranrw03) {
        $iuranrw03->delete();
        return redirect()->route('iuranrw03.index')->with('Iuran RW 03 deleted!')->with('success', true);
    }

    public function laporan()
    {
        $iuranrw03 = Iuranrw03::with(['datarw03'])->get();
        return view('laporan_keuanganrw03.index', compact('iuranrw03'));
    }
}
