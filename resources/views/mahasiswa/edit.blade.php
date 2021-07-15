@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post">
                        @csrf

                        
                        <div class="form-group">
                                <div class="form-group">
                                    <label for="">NPM</label>
                                    <input type="text" name="npm" class="form-control colt-mb-9" placeholder="Tambahkan NPM" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->npm }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Mahasiswa</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control colt-mb-9" placeholder="Tambahkan Nama Lengkap" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->nama_mahasiswa }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control colt-mb-9" placeholder="Tambahkan Tempat Lahir" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->tempat_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control colt-mb-9" placeholder="Tambahkan Tanggal Lahir" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->tgl_lahir}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select type="text" name="jenis_kelamin"  class="form-control colt-mb-9" id="jenis_kelamin">
                                        <option value {{$mahasiswa->jenis_kelamin=='L'?'selected':''}} ="L">Laki-laki</option>
                                        <option value {{$mahasiswa->jenis_kelamin=='P'?'selected':''}} ="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control colt-mb-9" placeholder="Tambahkan Telepon" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->telepon }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control colt-mb-9" placeholder="Tambahkan Alamat" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->alamat }}">
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="float-right ">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa')}}" class="btn btn-md btn-danger">BATAL</a>
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
