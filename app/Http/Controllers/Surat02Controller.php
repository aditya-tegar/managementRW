<?php

namespace App\Http\Controllers;

use App\Surat02;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Surat02Controller extends Controller
{
    public function index() {
        $surat02 = Surat02::all();
        return view('surat02.index', compact('surat02'));
    }

    public function store(Request $request) {
        if ($request->has('file')) {
            $nama_file = Storage::putFile('public/document', $request->file('file'));
        }

        Surat02::create([
            'nama_warga' => $request->nama_warga,
            'file' => $nama_file ?? null, 
            'keterangan' => $request->keterangan,
        ]);
        
        return redirect()->route('surat02.index');
    }

    public function create()
    {
        return view('surat02.create');
    }

    public function edit(Surat02 $surat02) {
        return view('surat02.edit', compact('surat02'));
    }

    public function update(Request $request, Surat02 $surat02) {
        $surat02->nama_warga = $request->nama_warga;
        $surat02->keterangan = $request->keterangan;

        if ($request->has('file')) {
            $nama_file = Storage::putFile('public/document', $request->file('file'));
            $surat02->file = $nama_file;
        }

        $surat01->save();

        return redirect()->route('surat02.index')->with('status','Warga RT 02 updated!')->with('success', true);
    }

    public function destroy(Surat02 $surat02) {
        $surat02->delete();
        return redirect()->route('surat02.index')->with('Warga RT 02 deleted!')->with('success', true);
    }

    public function download(Surat02 $surat02)
    {
        return Storage::download($surat02->file);
    }

    public function laporan()
    {
        $surat02 = Surat02::all();
        return view('laporan_surat02.index', compact('surat02'));
    }
}
