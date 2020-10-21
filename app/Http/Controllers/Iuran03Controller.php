<?php

namespace App\Http\Controllers;

use App\Warga03;
use App\Iuran03;
use Illuminate\Http\Request;

class Iuran03Controller extends Controller
{
    public function index() {
        $iuran03 = Iuran03::with(['warga03'])->get();
        return view('iuran03.index', compact('iuran03'));
    }

    public function store(Request $request) {
        $iuran03 = new Iuran03([
            'nominal' => $request->nominal,
            'jenis_iuran' => $request->jenis_iuran,
            'keterangan' => $request->keterangan,
        ]);
        
        $warga03 = Warga03::find($request->warga03);

        $iuran03->warga03()->associate($warga03);
        $iuran03->save();

        return redirect()->route('iuran03.index');
    }

    public function create()
    {
        $warga03 = Warga03::all();
        return view('iuran03.create', compact('warga03'));
    }

    public function edit(Iuran03 $iuran03) {
        return view('iuran03.edit', compact('iuran03'));
    }

    public function update(Request $request, Iuran03 $iuran03) {
        $iuran03->nominal = $request->nominal;
        $iuran03->jenius_iuran = $request->jenis_iuran;
        $iuran03->keterangan = $request->keterangan;
        $iuran03->save();

        return redirect()->route('iuran03.index')->with('status','Warga RT 03 updated!')->with('success', true);
    }

    public function destroy(Iuran03 $iuran03) {
        $iuran03->delete();
        return redirect()->route('iuran03.index')->with('Warga RT 03 deleted!')->with('success', true);
    }

    public function laporan()
    {
        $iuran03 = Iuran03::with(['warga03'])->get();
        return view('laporan_keuangan03.index', compact('iuran03'));
    }
}

