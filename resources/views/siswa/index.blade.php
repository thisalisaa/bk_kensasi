@extends('layouts.app')

@section('contents')
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu navigasi di sebelah kanan -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ url('/beranda') }}">Beranda</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
    </nav>
    <hr style="margin: 0;">

    <div class="container mt-4">
        <h2>Selamat Datang Siswa</h2>
        <form action="/logout" method="post">
            @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
        </form>
    </div>
@endsection
