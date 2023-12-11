@extends('biodata.layout')

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
        <img src="{{ asset('asset/logokensasi-removebg-preview.png') }}" alt="Logo Informasi Pemagangan" class="logo-informasi">

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
                    <a class="nav-link {{ Request::is('biodata/data-siswa*') ? 'active' : '' }}" href="{{ url('/biodata/data-siswa') }}">Biodata Diri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata/orang-tua*') ? 'active' : '' }}" href="{{ url('/biodata/orang-tua') }}">Orang Tua</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata/keterangan-lain*') ? 'active' : '' }}" href="{{ url('/biodata/keterangan-lain') }}">Keterangan Lain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata/unduh-data*') ? 'active' : '' }}" href="{{ url('/biodata/unduh-data') }}">Unduh Data</a>
                </li>
            </ul>
        </div>
        <br>
        

    <div class="tab-content">
        <div class="tab-pane fade show active" id="data-siswa" role="tabpanel" aria-labelledby="data-siswa-tab">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="m-0">Biodata ISMATUL MAULA</h5>
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-sm btn-primary" href="{{ url('/biodata/perbarui') }}" disabled>
                                <i class="fas fa-edit"></i>
                                Perbarui Biodata
                            </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="border m-3 py-1 px-2">
                        <h5>
                            <b>Foto Siswa</b>
                        </h5>
                        <img src="{{ asset('asset/isma.jpeg') }}" alt="foto siswa" class="cursor-pointer w-100" data-toggle="modal" data-target="#detil-portrait">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <table class="table table-striped table-responsive-sm">
                        <tbody>
                            <tr>
                                <th style="width: 300px">NISN</th>
                                <td>004577934</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nama Lengkap</th>
                                <td>Ismatul Maula</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Kelas</th>
                                <td>X Akl 1</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jenis Kelamin</th>
                                <td>Perempuan</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tempat Tanggal Lahir</th>
                                <td>24 Agustus 2004</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Agama</th>
                                <td>Islam</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Bahasa Pengantar Dirumah</th>
                                <td>Bahasa Indonesia</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Anak Ke-</th>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jumlah Saudara Kandung</th>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Alamat Siswa</th>
                                <td>Ds.Bulak</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">No Telepon/WA</th>
                                <td>0895636676177</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tinggal Dengan</th>
                                <td>Orang Tua</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jarak Dari Rumah Ke Sekolah</th>
                                <td>10 Km</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Berangkat Ke Sekolah</th>
                                <td>Naik Pesawat</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Asal Sekolah SMP/MTS</th>
                                <td>Netuza</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Berat Badan</th>
                                <td>40 Kg</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tinggi Badan</th>
                                <td>150 Cm</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Golongan Darah</th>
                                <td>o</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Riwayat Penyakit</th>
                                <td>tidak</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
