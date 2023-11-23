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
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Edit Informasi</h4>
        </div>
        <div class="card-body">
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

            <form action="{{ route('informasi.update', $info->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul_informasi" class="form-label">Judul Informasi</label>
                    <input type="text" name="judul_informasi" value="{{ $info->judul_informasi }}" class="form-control" placeholder="Judul">
                </div>

                <div class="mb-3">
                    <label for="pembuat" class="form-label">Dibuat Oleh</label>
                    <input class="form-control" name="pembuat" placeholder="Pembuat" value="{{ $info->pembuat }}">
                </div>

                <div class="mb-3">
                    <label for="tanggal_informasi" class="form-label">Tanggal Informasi</label>
                    <input type="datetime-local" name="tanggal_informasi" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($info->tanggal_informasi)) }}">
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    @if($info->foto)
                        <p>{{ $info->foto }}</p>
                    @else
                        <p>Tidak ada gambar</p>
                    @endif
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="isi_informasi" class="form-label">Isi Informasi</label>
                    <textarea class="form-control" name="isi_informasi" placeholder="Isi" rows="8">{{ $info->isi_informasi }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Perbarui</button>
                    <a class="btn btn-primary" href="{{ route('informasi.index') }}"> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

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

