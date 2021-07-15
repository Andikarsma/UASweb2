@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai</div>

                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="post">
                        @csrf
                        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="makul_id">Nama Matakuliah</label>
                                    <select type="number" name="makul_id"  class="form-control colt-mb-9" id="">
                                        @foreach ($makul as $mk)
                                        <option value="{{ $mk->id }}">{{$mk->nama_makul}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select type="number" name="mahasiswa_id"  class="form-control colt-mb-9" id="">
                                        @foreach ($mahasiswa as $mhs)
                                        <option value="{{ $mhs->id }}">{{$mhs->nama_mahasiswa}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Tambahkan Nilai" value="{{ is_null
                                    ($nilai)? '' : $nilai->nilai }}">
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="form-row float-right ">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('nilai')}}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
