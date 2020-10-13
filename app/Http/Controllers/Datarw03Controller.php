<?php

namespace App\Http\Controllers;

use App\Datarw03;
use Illuminate\Http\Request;

class Datarw03Controller extends Controller
{
    public function index() {
        $datarw03 = Datarw03::all();
        return view('datarw03.index', compact('datarw03'));
    }

    public function store(Request $request) {
        Datarw03::create($request->all());
        return redirect()->route('datarw03.index');
    }

    public function create()
    {
        return view('datarw03.create', compact('status'));
    }

    public function edit(Datarw03 $datarw03) {
        return view('datarw03.edit', compact('datarw03'));
    }

    public function update(Request $request, Datarw03 $datarw03) {
        $datarw03->no_ktp = $request->no_ktp;
        $datarw03->nama_warga = $request->nama_warga;
        $datarw03->alamat = $request->alamat;
        $datarw03->no_telepon = $request->no_telepon;
        $datarw03->save();

        return redirect()->route('datarw03.index')->with('status','Data RW 03 updated!')->with('success', true);
    }

    public function destroy(Datarw03 $datarw03) {
        $datarw03->delete();
        return redirect()->route('datarw03.index')->with('Data RW 03 deleted!')->with('success', true);
    }
}
