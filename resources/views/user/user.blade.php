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

    .custom-card {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        background-color: #02B3FF;
    }

    .custom-card:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        background-color: #ADD8E6;
    }

    .card-body {
        max-height: 150px;
        overflow: hidden;
        
    }

    .custom-card img {
        margin-top: 10px;
        margin-bottom: 0px;
        max-height: 100px; /* Sesuaikan dengan kebutuhan Anda */
        width: auto;
    }
    
</style>

<nav class="navbar navbar-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('asset/biru2.jpg') }}" alt="Logo" width="15" height="15" class="d-inline-block align-text-top">
            <span style="color: #000000; font-size: 14px;">0838-9377-9890</span>
        <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="15" height="15" class="d-inline-block align-text-top">
            <span style="color: #000000; font-size: 14px;">smkn.1sindang@yahoo.co.id</span>
            <a class="ml-auto" style="color: #000000; font-size: 14px;">Login</a>
            
        </a>
    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
        <img src="{{ asset('asset/logokensasi-removebg-preview.png') }}" alt="Logo Informasi Pemagangan" class="logo-informasi">

            <div>
                <b class="informasi-pemagangan">Informasi Pemagangan</b>
                <p class="smkn-text">SMKN 1 SINDANG</p>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

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
<div class="row text-center">
    @foreach ($informasi as $info)
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex">
                        @if ($info->foto)
                            <img src="{{ asset('gambar/' . $info->foto) }}" class="img-fluid rounded-start" alt="...">
                        @else
                            <!-- Foto default jika tidak ada foto yang diinputkan -->
                            <img src="{{ asset('asset/office-building.png') }}" class="img-fluid rounded-start" alt="Default Photo" style="width: 150px; height: 160px; margin-top: 20px;">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 style="text-align: justify; text-justify: inter-word;" class="card-title">{{ $info->judul_informasi }}</h5>
                            <div style="text-align: justify; text-justify: inter-word;" class="card-text">{{ $info->isi_informasi }}</div>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('informasi.show', $info->id) }}" class="btn btn-info">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="row text-center">
    {{ $informasi->links() }}
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
</footer

