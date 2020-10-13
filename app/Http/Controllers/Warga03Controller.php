<?php

namespace App\Http\Controllers;

use App\Warga03;
use Illuminate\Http\Request;

class Warga03Controller extends Controller
{
    public function index() {
        $warga03 = Warga03::all();
        return view('warga03.index', compact('warga03'));
    }

    public function store(Request $request) {
        Warga03::create($request->all());
        return redirect()->route('warga03.index');
    }

    public function create()
    {
        return view('warga03.create', compact('status'));
    }

    public function edit(Warga03 $warga03) {
        return view('warga03.edit', compact('warga03'));
    }

    public function update(Request $request, Warga03 $warga03) {
        $warga03->no_ktp = $request->no_ktp;
        $warga03->nama_warga = $request->nama_warga;
        $warga03->alamat = $request->alamat;
        $warga03->no_telepon = $request->no_telepon;
        $warga03->save();

        return redirect()->route('warga03.index')->with('status','Warga RT 03 updated!')->with('success', true);
    }

    public function destroy(Warga03 $warga03) {
        $warga03->delete();
        return redirect()->route('warga03.index')->with('Warga RT 03 deleted!')->with('success', true);
    }

    public function laporan()
    {
        $warga03 = Warga03::all();
        return view('laporan_data03.index', compact('warga03'));
    }
}
