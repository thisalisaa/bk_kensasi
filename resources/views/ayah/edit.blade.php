<!-- resources/views/ayah/edit.blade.php -->

@extends('ayah.layout')

@section('content')
    <div class="container mt-3">
        <h2>Edit Data Ayah</h2>
        <form method="POST" action="{{ route('ayah.update', $ayah->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" value="{{ $ayah->nama }}" required>
            </div>

            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                <input type="text" name="pendidikan_terakhir" class="form-control" value="{{ $ayah->pendidikan_terakhir }}" required>
            </div>

            <div class="form-group">
                <label for="alamat_lengkap">Alamat Lengkap:</label>
                <textarea name="alamat_lengkap" class="form-control" required>{{ $ayah->alamat_lengkap }}</textarea>
            </div>

            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="text" name="nomor_telepon" class="form-control" value="{{ $ayah->nomor_telepon }}" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" name="pekerjaan" class="form-control" value="{{ $ayah->pekerjaan }}" required>
            </div>

            <div class="form-group">
                <label for="penghasilan">Penghasilan:</label>
                <input type="text" name="penghasilan" class="form-control" value="{{ $ayah->penghasilan }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
