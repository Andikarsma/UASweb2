<?php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;
use alert;
use App\Mahasiswa;
use App\Makul;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa','makul'])->get();
        return view('nilai.index', compact('nilai'));
    }
    public function create()
{
    $makul = Makul::all();
    $mahasiswa = Mahasiswa::all();
    return view('nilai.tambah', compact('makul','mahasiswa'));
}
public function store(Request $request)
{
    Nilai::create($request->all());
    alert()->success('Sukses','Data Berhasil Disimpan');
    return redirect()->route('nilai');
}

public function edit($id)
{
    $makul = Makul::all();
    $mahasiswa = Mahasiswa::all();
    $nilai = Nilai::find($id);
    return view('nilai.edit', compact('nilai','makul','mahasiswa'));
}
public function update(Request $request, $id)
{
    $nilai =Nilai::find($id);
    $nilai->update($request->all());
    toast('Yeay Berhasil Mengedit Data','success');
    return redirect()->route('nilai');

}
public function destroy($id)
{
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('nilai');
}
}
