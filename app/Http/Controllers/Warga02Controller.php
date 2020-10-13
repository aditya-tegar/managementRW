<?php

namespace App\Http\Controllers;

use App\Warga02;
use Illuminate\Http\Request;

class Warga02Controller extends Controller
{
    public function index() {
        $warga02 = Warga02::all();
        return view('warga02.index', compact('warga02'));
    }

    public function store(Request $request) {
        Warga02::create($request->all());
        return redirect()->route('warga02.index');
    }

    public function create()
    {
        return view('warga02.create', compact('status'));
    }

    public function edit(Warga02 $warga02) {
        return view('warga02.edit', compact('warga02'));
    }

    public function update(Request $request, Warga02 $warga02) {
        $warga02->no_ktp = $request->no_ktp;
        $warga02->nama_warga = $request->nama_warga;
        $warga02->alamat = $request->alamat;
        $warga02->no_telepon = $request->no_telepon;
        $warga02->save();

        return redirect()->route('warga02.index')->with('status','Warga RT 02 updated!')->with('success', true);
    }

    public function destroy(Warga02 $warga02) {
        $warga02->delete();
        return redirect()->route('warga02.index')->with('Warga RT 02 deleted!')->with('success', true);
    }

    public function laporan()
    {
        $warga02 = Warga02::all();
        return view('laporan_data02.index', compact('warga02'));
    }
}
