@extends('datasiswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <a class="btn btn-primary" href="{{ route('datasiswa.index') }}">Kembali</a>
        </div>
    </div>
</nav><hr style="margin: 0;">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-box text-left border" style="border-radius: 8px; background-color: #73BEDF; position: relative; margin-bottom: 20px; padding: 20px;">

                <!-- Header Section: Datasiswa Title and Back Button -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <!-- <a class="btn btn-primary" href="{{ route('datasiswa.index') }}">Back</a> -->
                    <h2 class="text-center text-white">Data Siswa</h2>
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
    <form class="row">
    <!-- Add this inside your form -->
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <label>Foto diri</label>
        <input type="file" name="foto_siswa" class="form-control" accept="image/jpeg, image/jpg,image/png, image/gif">
    </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>NISN:</label>
                <input type="text" name="nisn" class="form-control" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Nama Lengkap:</label>
                <input class="form-control" name="nama" ></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Kelas:</label>
                <input class="form-control" name="kelas" ></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <input class="form-control" name="jk" ></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Tempat Tanggal Lahir:</label>
                <input class="form-control" name="ttl" ></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Agama/Kepercayaaan:</label>
                <input class="form-control" name="agama"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Bahasa Pengantar Dirumah:</label>
                <input class="form-control" name="bahasa" ></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Anak Ke:</label>
                <input class="form-control" name="anak_ke"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Jumlah Saudara Kandung:</label>
                <input class="form-control" name="jumlah_saudara"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Alamat Peserta Didik/Siswa:</label>
                <input class="form-control" name="alamat_siswa"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Nomor Telepon/WA:</label>
                <input class="form-control" name="no_telepon"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Tinggal dengan:</label>
                <input class="form-control" name="tinggal_dengan"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Jarak Dari Rumah Ke Sekolah:</label>
                <input class="form-control" name="jarak_kesekolah"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Kendaraan Kesekolah:</label>
                <input class="form-control" name="kendaraan"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Asal Sekolah SMP/MTS:</label>
                <input class="form-control" name="asal sekolah"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Berat Badan(kg):</label>
                <input class="form-control" name="bb"></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Tinggi Badan(cm):</label>
                <input class="form-control" name="tb"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Golongan Darah:</label>
                <input class="form-control" name="gol_darah"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Riwayat Penyakit:</label>
                <input class="form-control" name="riwayat_penyakit"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <a class="btn btn-primary" href="{{ route('datasiswa.index') }}">Next</a>
        </div>
</div>   
</div>
</div>
</div>
</form>

<footer class="bg-primary text-light text-center py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <img src="{{ asset('assets/image/logokensasi-removebg-preview.png') }}" alt="Logo Informasi Pemagangan" class="logo-informasi">
                <h5 style=" font-size: 15px;">BK SMKN 1 SINDANG</h5>
                <p style=" font-size: 15px;">Platform BK Sekolah ini didedikasikan untuk Layanan Bimbingan dan Konseling di SMKN 1 Sindang. Platform ini menyediakan banyak fitur yang akan menjadi alat bantu Konselor Sekolah/Guru Bimbingan dan Konseling</p>
            </div>
            <div class="col-md-6 text-md-right">
            <img src="{{ asset('assets/image/map.png') }}" alt="Logo map" class="logo-map">
                <h5 style=" font-size: 15px;">ADDRESS</h5>
                <p style=" font-size: 15px;" >Jl. Mayor Dasuki No.3b, Penganjang, Kec. Sindang, Kabupaten Indramayu, Jawa Barat 45221</p>
            </div>
        </div>
    </div>
    <p class="mb-0">copyright &copy; 2023 BK SMKN 1 SINDANG.</p>
</footer>





