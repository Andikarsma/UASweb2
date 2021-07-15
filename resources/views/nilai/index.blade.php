@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        Data Nilai Mahasiswa
                    <a href="{{route('tambah-nilai')}}" class="btn btn-md btn-primary float-right">Tambah Data Nilai</a>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                                <th>NO</th>
                                <th>NPM</th>
                                <th>NAMA</th>
                                <th>NAMA MAKUL</th>
                                <th>SKS</th>
                                <th>NILAI</th>
                                <th>AKSI</th>

                            </tr>
                            @foreach ($nilai as $nl)
                            <tr>
                                <td>{{ $nl->id}}</td>
                                <td>{{ $nl->mahasiswa->npm}}</td>
                                <td>{{ $nl->mahasiswa->nama_mahasiswa}}</td>
                                <td>{{ $nl->makul->nama_makul}}</td>
                                <td>{{ $nl->makul->sks}}</td>
                                <td>{{ $nl->nilai}}</td>
                                <td>
                                    <a href="{{ route('edit.nilai', $nl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus.nilai', $nl->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
