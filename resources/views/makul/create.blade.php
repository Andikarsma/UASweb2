@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Makul</div>

                <div class="card-body">
                    <form action="{{ route('simpan.makul') }}" method="post" class="form-item">
                        @csrf
                        <div class="form-group">
                                <div class="form-group">
                                    <label for="">Kode Makul</label>
                                    <input type="text" name="kd_makul" class="form-control colt-mb-9" placeholder="Tambahkan Kode Makul">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Matakuliah</label>
                                    <input type="text" name="nama_makul" class="form-control colt-mb-9" placeholder="Tambahkan Nama Matakuliah">
                                </div>
                                <div class="form-group">
                                    <label for="">SKS</label>
                                    <input type="number" name="sks" class="form-control colt-mb-9" placeholder="Tambahkan SKS Matakuliah">
                                </div>
                                    <button type="submit" class="btn btn-md btn-primary ">SIMPAN</button>
                                    <a href="{{ route('makul')}}" class="btn btn-md btn-danger">BATAL</a>
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
