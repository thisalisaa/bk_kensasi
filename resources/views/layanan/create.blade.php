@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/popup.css') }}">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2 class="text-center">Buat Laporan</h2>
        </div>
    </div>
</div>

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
<form id="layananForm" action="{{ route('layanan.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Nama Korban</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Kelas</label>
                <input class="form-control" name="kelas" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Ceritakan Masalah yang dialami korban</label>
                <textarea name="masalah" class="form-control" required></textarea>
            </div>
        </div>
    </div>
<div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success" onclick="openPopup()" style="margin-bottom:20px" >Kirim</button>
            <div class="popup" id="popup">
                <h2>Terima Kasih</h2>
                <p>Lanjutkan ke WhatsApp</p>
                <button type="button" onclick="redirectToWhatsApp()">OK</button>
            </div>
        </div>
    </div>

</form>

<script>
    let popup = document.getElementById("popup");

    function openPopup() {
        popup.classList.add("open-popup");
    }

    function closePopup() {
        popup.classList.remove("open-popup");
    }

    function redirectToWhatsApp() {
        // Ambil nilai inputan dari formulir
    var nama = document.querySelector("input[name='nama']").value;
        var kelas = document.querySelector("input[name='kelas']").value;
        var masalah = document.querySelector("textarea[name='masalah']").value;

        // Ganti URL berikut dengan link WhatsApp yang sesuai dengan nomor atau grup Anda
        var waLink = 'https://wa.me/6283893794386';

        // Buat pesan yang ingin dikirimkan ke WhatsApp
        var whatsappMessage = 'Halo, saya ' + nama + ' dari kelas ' + kelas + '. Masalah yang saya alami adalah ' + masalah;

        // // Gabungkan URL WhatsApp dan pesan
        var fullWhatsAppLink = waLink + '?text=' + encodeURIComponent(whatsappMessage);

        // Arahkan pengguna ke WhatsApp
        window.location.href = fullWhatsAppLink;
    }
</script>
@endsection