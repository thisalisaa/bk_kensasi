@extends('profil.layout')

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
                <b class="informasi-pemagangan">Profil Anda</b>
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
</nav><hr>

<div class="container">
    <div class="profile-card">
        <div class="card" style="width: 25rem; height: 20rem;">
            <div class="card-body text-center">
                <!-- Display user's current photo -->
                <img src="{{ asset('logokensasi-removebg-preview.png') }}" alt="User Photo" class="logo-informasi"><br>
                
                <!-- Form for changing photo -->
                <form action="{{ route('update.photo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="foto" class="form-control">
                    <button type="submit" class="card-title">Change Photo</button>
                </form>

                <!-- Form for updating username and email -->
                <form action="{{ route('update.profile') }}" method="post">
                    @csrf
                    <h6 class="card-subtitle mb-2 text-muted">Username</h6>
                    <input type="text" name="username" value="{{ $user->username }}" class="form-control" required>
                    
                    <h6 class="card-text">Email</h6>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
                    
                    <button type="submit" class="card-link">Update</button>
                    <a href="#" class="card-link">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
