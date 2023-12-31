<!-- resources/views/ibu/create.blade.php -->

@extends('ibu.layout')

@section('content')
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="form-box text-left" style="border: 2px solid #4e7cff; padding: 90px; border-radius: 8px; background-color: #73BEDF; width: 60%; position: relative; margin-bottom: 20px;">
            <h2 class="text-center" style="color: #fff; margin-bottom: 20px;">Data Ibu</h2>
            <form method="POST" action="{{ route('ibu.store') }}" style="width: 100%;">
                @csrf

                <div class="form-group">
                    <label for="nama" class="text-white">Nama:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="pendidikan_terakhir" class="text-white">Pendidikan Terakhir:</label>
                    <input type="text" name="pendidikan_terakhir" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="alamat_lengkap" class="text-white">Alamat Lengkap:</label>
                    <textarea name="alamat_lengkap" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="nomor_telepon" class="text-white">Nomor Telepon:</label>
                    <input type="text" name="nomor_telepon" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="pekerjaan" class="text-white">Pekerjaan:</label>
                    <input type="text" name="pekerjaan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="penghasilan" class="text-white">Penghasilan:</label>
                    <input type="text" name="penghasilan" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success" style="width: 80px; position: absolute; bottom: 20px; right: 10px;">Simpan</button>
            </form>
        </div>
    </div>
@endsection
