@extends('layouts.app')
@section('content')


<div class="container">
    <div class="card mt-5 mb-5 ">
        <div class="card-header text-center">
            <h4>Tambahkan Informasi Baru</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada yang salah sama inputan kamu nihh!!.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('informasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul_informasi" class="form-label">Judul Informasi</label>
                    <input type="text" name="judul_informasi" class="form-control" id="judul_informasi" placeholder="Masukkan judul informasi">
                </div>

                <div class="mb-3">
                    <label for="pembuat" class="form-label">Pembuat</label>
                    <input type="text" name="pembuat" class="form-control" placeholder="Masukkan nama pembuat" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_waktu" class="form-label">Tanggal dan Waktu</label>
                    <input type="datetime-local" class="form-control" name="tanggal_waktu" placeholder="Masukkan tanggal dan waktu" id="tanggal_waktu">
                    <small id="tanggalWaktuHelp" class="form-text text-muted">Contoh: 13-11-2023 23:30</small>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" placeholder="Masukkan foto">
                </div>

                <div class="mb-3">
                    <label for="isi_informasi" class="form-label">Isi Informasi</label>
                    <textarea class="form-control" name="isi_informasi" placeholder="Masukkan isi informasi" rows="8" required></textarea>
                    
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-primary" href="{{ route('informasi.index') }}"> Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
@endsection



