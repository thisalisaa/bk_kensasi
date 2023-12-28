@extends('datasiswa.layout')

<nav class="navbar navbar-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('asset/lg.png') }}" alt="Logo" width="20" height="15" class="d-inline-block align-text-top">
            <span style="color: #000000; font-size: 14px;">0838-9377-9890</span>
            <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="15" height="15" class="d-inline-block align-text-top">
            <span style="color: #000000; font-size: 14px;">smkn.1sindang@yahoo.co.id</span>
            <a class="ml-auto" style="color: #000000; font-size: 14px;">Logout</a>
        </a>
    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
        <img src="{{ asset('asset/logo.png') }}" alt="Logo Informasi Pemagangan" class="logo-informasi" style="width: 80px; height: auto;">
            <div>
                <p class="smkn-text">SMKN 1 SINDANG</p>
            </div>
        </div>

        <!-- Tombol toggler untuk navbar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu navigasi di sebelah kanan -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="#">Beranda</a>
                <a class="nav-link" href="#">Data</a>
                <a class="nav-link" href="">Informasi</a>
            </div>
        </div>
    </div>
</nav><hr>
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-box text-left border" style="border-radius: 8px; background-color: #73BEDF; position: relative; margin-bottom: 20px; padding: 20px;">

                <!-- Header Section: Datasiswa Title and Back Button -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <a class="btn btn-primary" href="{{ route('datasiswa.index') }}">Back</a>
                    <h2 class="text-center text-white">Datasiswa</h2>
                    <div style="width: 80px;"></div> <!-- Add an empty div for spacing, adjust width as needed -->
                </div>



@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('datasiswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <!-- Add this inside your form -->
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Photo:</strong>
        <input type="file" name="foto_siswa" class="form-control" accept="image/jpeg, image/jpg,image/png, image/gif">
        
    </div>
    </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NISN:</strong>
                <input type="text" name="nisn" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap:</strong>
                <input class="form-control" name="nama" ></input>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas:</strong>
                <input class="form-control" name="kelas" ></input>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Jenis Kelamin:</strong>
            <select class="form-select" aria-label="Default select example" name="jk">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-laki">Laki-laki</option>
            </select>

            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Tanggal Lahir:</strong>
            <input class="form-control" name="ttl">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama/Kepercayaaan:</strong>
                <input class="form-control" name="agama"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bahasa Pengantar Dirumah:</strong>
                <input class="form-control" name="bahasa" ></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anak Ke:</strong>
                <input class="form-control" name="anak_ke"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Saudara Kandung:</strong>
                <input class="form-control" name="jumlah_saudara"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Peserta Didik/Siswa:</strong>
                <input class="form-control" name="alamat_siswa"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon/WA:</strong>
                <input class="form-control" name="no_telepon"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tinggal dengan:</strong>
                <input class="form-control" name="tinggal_dengan"></input>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jarak Dari Rumah Ke Sekolah:</strong>
                <input class="form-control" name="jarak_kesekolah"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Kendaraan Kesekolah:</strong>
                <input class="form-control" name="kendaraan"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Asal Sekolah SMP/MTS:</strong>
                <input class="form-control" name="asal sekolah"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Berat Badan:</strong>
                <input class="form-control" name="bb"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Tinggi Badan:</strong>
                <input class="form-control" name="tb"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Golongan Darah:</strong>
                <input class="form-control" name="gol_darah"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Riwayat Penyakit:</strong>
                <input class="form-control" name="riwayat_penyakit"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>



<footer class="bg-primary text-light text-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <img src="{{ asset('asset/logokensasi-removebg-preview.png') }}" alt="Logo Informasi Pemagangan" class="logo-informasi">
                <h5 style=" font-size: 15px;">BK SMKN 1 SINDANG</h5>
                <p style=" font-size: 15px;">Platform BK Sekolah ini didedikasikan untuk Layanan Bimbingan dan Konseling di SMKN 1 Sindang. Platform ini menyediakan banyak fitur yang akan menjadi alat bantu Konselor Sekolah/Guru Bimbingan dan Konseling</p>
            </div>
            <div class="col-md-6 text-md-right">
            <img src="{{ asset('asset/map.png') }}" alt="Logo map" class="logo-map">
                <h5 style=" font-size: 15px;">ADDRESS</h5>
                <p style=" font-size: 15px;" >Jl. Mayor Dasuki No.3b, Penganjang, Kec. Sindang, Kabupaten Indramayu, Jawa Barat 45221</p>
            </div>
        </div>
    </div>
    <p class="mb-0">&copy; 2023 BK KENSASI.</p>
</footer>

@endsection
