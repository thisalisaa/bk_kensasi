<!-- resources/views/ibu/edit.blade.php -->

@extends('ibu.layout')

@section('content')
    <div class="container mt-3">
        <h2>Edit Data Ibu</h2>
        <form method="POST" action="{{ route('ibu.update', $ibu->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" value="{{ $ibu->nama }}" required>
            </div>

            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                <input type="text" name="pendidikan_terakhir" class="form-control" value="{{ $ibu->pendidikan_terakhir }}" required>
            </div>

            <div class="form-group">
                <label for="alamat_lengkap">Alamat Lengkap:</label>
                <textarea name="alamat_lengkap" class="form-control" required>{{ $ibu->alamat_lengkap }}</textarea>
            </div>

            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="text" name="nomor_telepon" class="form-control" value="{{ $ibu->nomor_telepon }}" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" name="pekerjaan" class="form-control" value="{{ $ibu->pekerjaan }}" required>
            </div>

            <div class="form-group">
                <label for="penghasilan">Penghasilan:</label>
                <input type="text" name="penghasilan" class="form-control" value="{{ $ibu->penghasilan }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
