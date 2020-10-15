<?php

namespace App\Http\Controllers;

use App\Surat01;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Surat01Controller extends Controller
{
    public function index() {
        $surat01 = Surat01::all();
        return view('surat01.index', compact('surat01'));
    }

    public function store(Request $request) {
        if ($request->has('file')) {
            $nama_file = Storage::putFile('public/document', $request->file('file'));
        }

        Surat01::create([
            'nama_warga' => $request->nama_warga,
            'file' => $nama_file ?? null, 
            'keterangan' => $request->keterangan,
        ]);
        
        return redirect()->route('surat01.index');
    }

    public function create()
    {
        return view('surat01.create');
    }

    public function edit(Surat01 $surat01) {
        return view('surat01.edit', compact('surat01'));
    }

    public function update(Request $request, Surat01 $surat01) {

        $surat01->keterangan = $request->keterangan;

        if ($request->has('file')) {
            $nama_file = Storage::putFile('public/document', $request->file('file'));
            $surat01->file = $nama_file;
        }

        $surat01->save();

        return redirect()->route('surat01.index')->with('status','Warga RT 01 updated!')->with('success', true);
    }

    public function destroy(Surat01 $surat01) {
        $surat01->delete();
        return redirect()->route('surat01.index')->with('Warga RT 01 deleted!')->with('success', true);
    }

    public function download(Surat01 $surat01)
    {
        return Storage::download($surat01->file);
    }

    public function laporan()
    {
        $surat01 = Surat01::all();
        return view('laporan_surat01.index', compact('surat01'));
    }
}
