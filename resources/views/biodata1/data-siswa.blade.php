@extends('biodata1.layout')

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
        <div class="tab-pane fade show active" id="data-siswa" role="tabpanel" aria-labelledby="data-siswa-tab">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="m-0">Biodata {{ Auth::user()->name }}</h5>
                        <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('Biodata1.edit', Auth::user()->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Perbarui Biodata
                        </a>
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
                        <img src="{{ asset('assets/image/jeruk.jpg') }}" alt="foto siswa" class="cursor-pointer w-100" data-toggle="modal" data-target="#detil-portrait">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <table class="table table-striped table-responsive-sm">
                        <tbody>
                            <tr>
                                <th style="width: 300px">NISN</th>
                                <td>
                                @if(Auth::user()->nisn == '-')
                                    <span style="color: red;">Perbarui nisn</span>
                                    @else
                                    {{ Auth::user()->nisn }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nama Lengkap</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Kelas</th>
                                <td>
                                    @if(Auth::user()->kelas == '-')
                                    <span style="color: red;">Perbarui kelas</span>
                                    @else
                                    {{ Auth::user()->kelas }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jenis Kelamin</th>
                                <td>
                                @if(Auth::user()->jk == '-')
                                    <span style="color: red;">Perbarui Jenis Kelamin</span>
                                    @else
                                    {{ Auth::user()->jk }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tempat Tanggal Lahir</th>
                                <td>@if(Auth::user()->ttl == '-')
                                    <span style="color: red;">Perbarui TTL</span>
                                    @else
                                    {{ Auth::user()->ttl }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Agama</th>
                                <td>@if(Auth::user()->agama == '-')
                                    <span style="color: red;">Perbarui agama</span>
                                    @else
                                    {{ Auth::user()->agama }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Bahasa Pengantar Dirumah</th>
                                <td>@if(Auth::user()->bahasa== '-')
                                    <span style="color: red;">Perbarui JBahasa</span>
                                    @else
                                    {{ Auth::user()->bahasa }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Anak Ke-</th>
                                <td>@if(Auth::user()->anak_ke== '-')
                                    <span style="color: red;">Perbarui Anak</span>
                                    @else
                                    {{ Auth::user()->anak_ke }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jumlah Saudara Kandung</th>
                                <td>@if(Auth::user()->jumlah_saudara== '-')
                                    <span style="color: red;">Perbarui jumlah saudara</span>
                                    @else
                                    {{ Auth::user()->jumlah_saudara }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Alamat Siswa</th>
                                <td>@if(Auth::user()->alamat_siswa== '-')
                                    <span style="color: red;">Perbarui alamat</span>
                                    @else
                                    {{ Auth::user()->alamat_siswa }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">No Telepon/WA</th>
                                <td>@if(Auth::user()->no_telepon== '-')
                                    <span style="color: red;">Perbarui nomer</span>
                                    @else
                                    {{ Auth::user()->no_telepon }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tinggal Dengan</th>
                                <td>@if(Auth::user()->tinggal_dengan== '-')
                                    <span style="color: red;">Perbarui tinggal_dengan</span>
                                    @else
                                    {{ Auth::user()->tinggal_dengan }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jarak Dari Rumah Ke Sekolah</th>
                                <td>@if(Auth::user()->jarak_kesekolah== '-')
                                    <span style="color: red;">Perbarui jarak</span>
                                    @else
                                    {{ Auth::user()->jarak_kesekolah }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Berangkat Ke Sekolah</th>
                                <td>@if(Auth::user()->kendaraan== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->kendaraan }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Asal Sekolah SMP/MTS</th>
                                <td>@if(Auth::user()->asal_sekolah== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->asal_sekolah }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Berat Badan</th>
                                <td>@if(Auth::user()->bb== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->bb }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tinggi Badan</th>
                                <td>@if(Auth::user()->tb== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->tb }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Golongan Darah</th>
                                <td>@if(Auth::user()->gol_darah== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->asal_sekolah }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Riwayat Penyakit</th>
                                <td>@if(Auth::user()->riwayat_penyakit== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->riwayat_penyakit }}
                                    @endif</td>
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

