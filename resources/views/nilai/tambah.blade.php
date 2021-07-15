@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Nilai</div>

                <div class="card-body">
                <form action="{{ route('simpan.nilai') }}" method="POST" class="form-item">
                @csrf
<div class="form-group">
        <label for="makul_id">Nama Matakuliah</label>
        <select type="number" name="makul_id"  class="form-control colt-mb-9" id="">
            @foreach ($makul as $mk)
            <option value="{{ $mk->id }}">{{$mk->nama_makul}}</option>
            @endforeach
        </select>
</div>
    <div class="form-group">
        <label for="mahasiswa_id">Nama Mahasiswa</label>
        <select type="number" name="mahasiswa_id"  class="form-control colt-mb-9" id="">
            @foreach ($mahasiswa as $mhs)
            <option value="{{ $mhs->id }}">{{$mhs->nama_mahasiswa}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nilai">Nilai</label>
        <input type="number" name="nilai" class="form-control colt-mb-9" >
    </div>

    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <a href="{{ route('nilai')}}" class="btn btn-md btn-danger">BATAL</a>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
