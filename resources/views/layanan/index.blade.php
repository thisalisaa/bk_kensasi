@extends('layanan.layout')
 
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
                <b class="informasi-pemagangan">Layanan Masalah</b>
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

    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laporkan Perundunganmu Disini</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('layanan.create') }}">Buat Laporan</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Masalah</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($layanan as $layanansiswa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $layanansiswa->nama }}</td>
            <td>{{ $layanansiswa->kelas }}</td>
            <td>{{ $layanansiswa->masalah }}</td>

            <td>
                <form action="{{ route('layanan.destroy',$layanansiswa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('layanan.show',$layanansiswa->id) }}">Lihat</a>
    
                    <a class="btn btn-primary" href="{{ route('layanan.edit',$layanansiswa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {{ $layanan->links() }}
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
