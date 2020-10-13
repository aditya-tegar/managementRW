<?php

namespace App\Http\Controllers;

use App\Warga01;
use Illuminate\Http\Request;

class Warga01Controller extends Controller
{
    public function index() {
        $warga01 = Warga01::all();
        return view('warga01.index', compact('warga01'));
    }

    public function store(Request $request) {
        Warga01::create($request->all());
        return redirect()->route('warga01.index');
    }

    public function create()
    {
        return view('warga01.create', compact('status'));
    }

    public function edit(Warga01 $warga01) {
        return view('warga01.edit', compact('warga01'));
    }

    public function update(Request $request, Warga01 $warga01) {
        $warga01->no_ktp = $request->no_ktp;
        $warga01->nama_warga = $request->nama_warga;
        $warga01->alamat = $request->alamat;
        $warga01->no_telepon = $request->no_telepon;
        $warga01->save();

        return redirect()->route('warga01.index')->with('status','Warga RT 01 updated!')->with('success', true);
    }

    public function destroy(Warga01 $warga01) {
        $warga01->delete();
        return redirect()->route('warga01.index')->with('Warga RT 01 deleted!')->with('success', true);
    }

    public function laporan()
    {
        $warga01 = Warga01::all();
        return view('laporan_data01.index', compact('warga01'));
    }
}
