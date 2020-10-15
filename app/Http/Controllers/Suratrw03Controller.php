<?php

namespace App\Http\Controllers;

use App\Suratrw03;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Suratrw03Controller extends Controller
{
    public function index() {
        $suratrw03 = Suratrw03::all();
        return view('suratrw03.index', compact('suratrw03'));
    }

    public function store(Request $request) {
        if ($request->has('file')) {
            $nama_file = Storage::putFile('public/document', $request->file('file'));
        }

        Suratrw03::create([
            'nama_warga' => $request->nama_warga,
            'file' => $nama_file ?? null, 
            'keterangan' => $request->keterangan,
        ]);
        
        return redirect()->route('suratrw03.index');
    }

    public function create()
    {
        return view('suratrw03.create');
    }

    public function edit(Suratrw03 $suratrw03) {
        return view('suratrw03.edit', compact('suratrw03'));
    }

    public function update(Request $request, Suratrw03 $suratrw03) {
        $suratrw03->keterangan = $request->keterangan;

        if ($request->has('file')) {
            $nama_file = Storage::putFile('public/document', $request->file('file'));
            $surat03->file = $nama_file;
        }

        $suratrw03->save();

        return redirect()->route('surat03.index')->with('status','Warga RT 03 updated!')->with('success', true);
    }

    public function destroy(Surat03 $surat03) {
        $suratrw03->delete();
        return redirect()->route('suratrw03.index')->with('Warga RT 03 deleted!')->with('success', true);
    }

    public function download(Suratrw03 $suratrw03)
    {
        return Storage::download($suratrw03->file);
    }

    public function laporan()
    {
        $suratrw03 = Suratrw03::all();
        return view('laporan_suratrw03.index', compact('suratrw03'));
    }
}
