<?php

namespace App\Http\Controllers;

use App\Surat03;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Surat03Controller extends Controller
{
    public function index() {
        $surat03 = Surat03::all();
        return view('surat03.index', compact('surat03'));
    }

    public function store(Request $request) {
        if ($request->has('file')) {
            $nama_file = Storage::putFile('public/document', $request->file('file'));
        }

        Surat03::create([
            'nama_warga' => $request->nama_warga,
            'file' => $nama_file ?? null, 
            'keterangan' => $request->keterangan,
        ]);
        
        return redirect()->route('surat03.index');
    }

    public function create()
    {
        return view('surat03.create');
    }

    public function edit(Surat03 $surat03) {
        return view('surat03.edit', compact('surat03'));
    }

    public function update(Request $request, Surat03 $surat03) {
        $surat03->keterangan = $request->keterangan;

        if ($request->has('file')) {
            $nama_file = Storage::putFile('public/document', $request->file('file'));
            $surat03->file = $nama_file;
        }

        $surat03->save();

        return redirect()->route('surat03.index')->with('status','Warga RT 03 updated!')->with('success', true);
    }

    public function destroy(Surat03 $surat03) {
        $surat03->delete();
        return redirect()->route('surat03.index')->with('Warga RT 03 deleted!')->with('success', true);
    }

    public function download(Surat03 $surat03)
    {
        return Storage::download($surat03->file);
    }

    public function laporan()
    {
        $surat03 = Surat03::all();
        return view('laporan_surat03.index', compact('surat03'));
    }
}
