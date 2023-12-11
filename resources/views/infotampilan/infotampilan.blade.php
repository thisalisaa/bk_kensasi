@extends('informasi.layout')

@section('content')
<style>
    .center-image {
        display: block;
        margin: 0 auto;
        max-width: 100%;
    }

    .navbar {
        background-color: #02B3FF;
        color: #000000;
        font-size: 19px;
    }
    .navbar-expand-lg.bg-body-tertiary {
        background-color: #ffffff;
        color: #000000;
        margin-bottom: 2px;
        margin-top: 2px;
    }

    .logo-informasi {
        width: 65px;
        height: 65px;
        margin-right: 2px;
        margin-bottom: 13px;
    }
    .logo-map {
        width: 65px;
        height: 65px;
        margin-right: 2px;
        margin-bottom: 13px;
    }

    .informasi-pemagangan {
        font-size: 20px;
    }

    .smkn-text {
        font-size: 13px;
    }

</style>

<nav class="navbar navbar-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('asset/biru2.jpg') }}" alt="Logo" width="20" height="15" class="d-inline-block align-text-top">
            <span style="color: #000000; font-size: 14px;">0838-9377-9890</span>
            <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="15" height="15" class="d-inline-block align-text-top">
            <span style="color: #000000; font-size: 14px;">smkn.1sindang@yahoo.co.id</span>
            <a class="ml-auto" style="color: #000000; font-size: 14px;">Login</a>
        </a>
    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Logo dan teks informasi pemagangan di sebelah kiri -->
        <div class="d-flex align-items-center">
        <img src="{{ asset('asset/logokensasi-removebg-preview.png') }}" alt="Logo Informasi Pemagangan" class="logo-informasi">

            <div>
                <b class="informasi-pemagangan">Informasi Pemagangan</b>
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
</nav>
<hr>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h4 style="text-align:center; color: #00008B;">{{ $informasi->judul_informasi }}</h4>
        </div>
    </div>

    <!-- Pindahkan bagian ini ke bawah judul -->
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
        <div class="form-group" style="display: flex; align-items: center; justify-content: center;">
            <i class="fa-solid fa-user" style="color: #2a4b84; font-size: 9px; margin-right: 5px;"></i>
            <label style="font-size: 15px; color: #6A4F4F; margin-right: 5px;">{{ $informasi->pembuat }}</label>
            <p style="font-size: 15px; color: #00008B; margin: 0;"> - BK Kensasi</p> <!-- Perbaiki margin menjadi 0 -->
        </div>
    </div>

    <!-- Pindahkan bagian ini ke bawah judul -->
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
        <div class="form-group" style="margin-bottom: 20px;">
            <i class="fa-solid fa-calendar-days" style="color: #2a4b84; font-size: 9px;"></i>
            <label style="font-size: 12px;"> {{ date('d-m-Y H:i', strtotime($informasi->tanggal_informasi)) }} WIB</label> <!-- Tambahkan "WIB" di sini -->
        </div>
    </div>

    <!-- Lanjutkan dengan bagian yang lain -->
    @if ($informasi->foto)
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 50px;">
            <div class="form-group">
                <img src="{{ asset('gambar/' . $informasi->foto) }}" alt="Gambar Informasi" width="300" height="300" class="center-image">
            </div>
        </div>
    @endif

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <div style="text-align: justify; text-justify: inter-word; margin: 0 50px;">{!! nl2br(e($informasi->isi_informasi)) !!}</div>
        </div>
    </div>
    <br>
</div>
<br>

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


