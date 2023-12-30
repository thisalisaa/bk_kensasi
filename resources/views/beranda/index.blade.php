@extends('beranda.layout')

@section('content')

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
        <img src="{{ asset('assets/image/logokensasi-removebg-preview.png') }}" alt="Logo Informasi Pemagangan" class="logo-informasi">

            <div>
                <b class="informasi-pemagangan">Beranda</b>
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
</nav><hr style="margin: 0;">

<div class="p-3 bg-primary-subtle text-emphasis-primary" style="background-color: #AADAEF; padding: 10px;">
    <div class="content-container" style="display: flex; align-items: center; justify-content: space-between; gap: 20px;">
        <div class="text-content" style="flex: 1; padding-right: 50px;">
            <h4 class="link">Yuk Bergabung</h4>
            <p class="narasi">
                Pelayanan bimbingan dan konseling sekolah
                merupakan usaha membantu peserta didik
                dalam pengembangan kehidupan pribadi,
                kehidupan sosial, kegiatan belajar, serta
                perencanaan dan pengembangan karir
            </p>
        </div>
        <div class="image-content" style="flex: 1; text-align: center; padding-right: 5px;">
            <img src="assets/image/bk.png" alt="bk" style="max-width: 100%; height: auto;">
            <p class="motto2" style="margin-top: 10px;">Guru BK Sahabat Siswa</p>
        </div>
    </div>
</div>

<div class="p-3 bg-white text-dark" style="display: flex; justify-content: center; align-items: center; flex-direction: row;">
    <img src="assets/image/personal-information.png" alt="biodata" width="150px" height="150px" style="margin: 0 10px;">
    <img src="assets/image/file.png" alt="informasi" width="150px" height="150px" style="margin: 0 10px;">
    <img src="assets/image/problem.png" alt="pengajuan" width="150px" height="150px" style="margin: 0 10px;">
</div>


