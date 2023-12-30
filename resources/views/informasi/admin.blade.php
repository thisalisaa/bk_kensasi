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
            <i class="fas fa-phone-alt" style="color: #000000; font-size: 14px;"></i>
            <span style="color: #000000; font-size: 14px; margin-left: 5px;">0838-9377-9890</span>
            <i class="fas fa-envelope" style="color: #000000; font-size: 14px;"></i>
            <span style="color: #000000; font-size: 14px; margin-left: 5px;">smkn.1sindang@yahoo.co.id</span>
        </a>
        <a class="ml-auto" href="{{ url('/register') }}" style="color: #000000; font-size: 14px;">
        <i class="fas fa-user" style="color: #000000; font-size: 14px;"></i>
        <span style="margin-left: 5px;">Login</span>
        </a>

    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Logo dan teks informasi pemagangan di sebelah kiri -->
        <div class="d-flex align-items-center">
        <img src="{{ asset('assets/image/logokensasi-removebg-preview.png') }}" alt="Logo Informasi Pemagangan" class="logo-informasi">

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
                <a class="nav-link" href="{{ url('/beranda') }}">Beranda</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Data
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('datasiswa.create') }}">Buat Data</a></li>
                    <li><a class="dropdown-item" href="{{ url('biodata/data-siswa') }}">Biodata Saya</a></li>
                    </ul>
                </div>
                <a class="nav-link" href="{{ url('informasi') }}">Informasi</a>
            </div>
        </div>
    </div>
</nav><hr style="margin: 0;">

<div class="d-flex justify-content-start mb-3" style="background-color: #f0f0f0; ">
    <a href="{{ route('informasi.create') }}" class="btn btn-success">
        <i class="fas fa-plus-circle mr-2"></i> Create
    </a>
</div>
@if ($message = Session::get('success',))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" style="background-color: #f0f0f0;">
    @foreach ($informasi as $info)
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card custom-card">
                @if ($info->foto)
                <img src="{{ asset('gambar/' . $info->foto) }}" class="card-img-top center-image" alt="...">
                @else
                <!-- Foto default jika tidak ada foto yang diinputkan -->
                <img src="{{ asset('asset/office-building.png') }}" class="card-img-top center-image" alt="Default Photo">
                @endif
                <hr>
                <div class="card-body">
                    <h5 class="card-title" >{{ $info->judul_informasi }}</h5>
                    <p class="card-text">{{ $info->isi_informasi }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dibuat Oleh : {{ $info->pembuat }}</li>
                    <li class="list-group-item">Diubah Pada : {{ $info->tanggal_informasi }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('informasi.show', $info->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('informasi.edit', $info->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('user.informasi.index') }}">Infosiswa</a>
                    <form action="{{ route('informasi.destroy', $info->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row text-center">
    {{ $informasi->links() }}
</div>
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


