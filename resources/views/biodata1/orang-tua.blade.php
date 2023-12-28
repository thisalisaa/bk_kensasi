@extends('biodata1.layout')

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
                <b class="informasi-pemagangan">Biodata Siswa</b>
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

<div class="row justify-content-center">
    <div class="card card-primary card-outline card-outline-tabs col-md-12">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="formulir-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata1/data-siswa*') ? 'active' : '' }}" href="{{ url('/biodata/data-siswa') }}">Biodata Diri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata1/orang-tua*') ? 'active' : '' }}" href="{{ url('/biodata/orang-tua') }}">Orang Tua</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata1/keterangan-lain*') ? 'active' : '' }}" href="{{ url('/biodata/keterangan-lain') }}">Keterangan Lain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata1/unduh-data*') ? 'active' : '' }}" href="{{ url('/biodata/unduh-data') }}">Unduh Data</a>
                </li>
            </ul>
        </div>
        <br>


    <div class="tab-content">
        <div class="tab-pane fade show active" id="orang-tua" role="tabpanel" aria-labelledby="orang-tua-tab">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="m-0">ORANG TUA / WALI</h5>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-sm btn-primary" disabled>
                                <i class="fas fa-edit"></i>
                                Perbarui Biodata
                            </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container mt-4">
                <div class="card card-primary card-outline card-outline-tabs">
                    <table class="table table-striped table-responsive-sm">
                        <tbody>
                            <tr>
                                <th style="width: 300px">Nama Ayah / Wali</th>
                                <td>Sarip</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Pendidikan Terakhir Ayah / Wali</th>
                                <td>SD</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Alamat Ayah / Wali Lengkap</th>
                                <td>Ds.Bulak Blok.Roma</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Pekerjaan Ayah / Wali</th>
                                <td>Petani</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Penghasilan Perbulan Ayah / Wali</th>
                                <td>Rp500.000</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nomor Telepon / WA</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nama Ibu / Wali</th>
                                <td>Riyati</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Pendidikan Terakhir Ibu / Wali</th>
                                <td>SD</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Pekerjaan Ibu / Wali</th>
                                <td>Ibu Rumah Tangga</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Penghasilan Perbulan Ibu / Wali</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nomor Telepon/WA</th>
                                <td>08955784496</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
    </div>
    </div>
</div>


<footer class="bg-primary text-light text-center py-3">
    <div class="container-fluid">
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
