<!-- resources/views/ayah/create.blade.php -->

@extends('ayah.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="form-box text-left" style="border: 2px solid #4e7cff; padding: 90px; border-radius: 8px; background-color: #73BEDF; width: 60%; position: relative; margin-bottom: 20px;">
            <h2 class="text-center" style="color: #fff; margin-bottom: 20px;">Data Ayah</h2>

        <form action="{{ route('ayah.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="nama">Nama Ayah:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                <input type="text" name="pendidikan_terakhir" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat_lengkap">Alamat Lengkap:</label>
                <textarea name="alamat_lengkap" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon:</label>
                <input type="text" name="nomor_telepon" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" name="pekerjaan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="penghasilan">Penghasilan:</label>
                <input type="text" name="penghasilan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success" style="width: 80px; position: absolute; bottom: 20px; right: 10px;">Simpan</button>
        </form>
    </div>
@endsection
