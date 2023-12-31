@extends('beranda.layout')

@section('content')

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
                <b class="informasi-pemagangan">Beranda</b>
                <p class="smkn-text">SMKN 1 SINDANG</p>
            </div>
        </div>
    </div>
</nav><hr style="margin: 0;">

<div class="p-3 bg-primary-subtle text-emphasis-primary" style="background-color: #AADAEF; padding: 10px;">
    <div class="content-container" style="display: flex; align-items: center; justify-content: space-between; gap: 20px;">
        <div class="text-content" style="flex: 1; padding-right: 50px;">
            <h4 class="link">Yuk Bergabung!!</h4>
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

<div class="p-3 text-dark" style="display: flex; justify-content: center; align-items: center; flex-direction: row; background-color: #D6EDF6;">
    <div style="text-align: center; margin: 0 10px;">
        <img src="assets/image/personal-information.png" alt="biodata" width="150px" height="150px">
        <p style="margin-top: 20px;">Data Siswa</p>
    </div>
    <div style="text-align: center; margin: 0 10px;">
        <img src="assets/image/file.png" alt="informasi" width="150px" height="150px">
        <p style="margin-top: 20px;">Informasi</p>
    </div>
    <div style="text-align: center; margin: 0 10px;">
        <img src="assets/image/problem.png" alt="pengajuan" width="150px" height="150px">
        <p style="margin-top: 20px;">Pengajuan Perundungan</p>
    </div>
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





