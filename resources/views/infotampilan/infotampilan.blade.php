@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12  mb-10">
        <div class="form-group mt-5">
            <h4 style="text-align:center; color: #00008B;">{{ $informasi->judul_informasi }}</h4>
        </div>
    </div>

    <!-- Pindahkan bagian ini ke bawah judul -->
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
        <div class="form-group" style="display: flex; align-items: center; justify-content: center;">
            <i class="fa-solid fa-user" style="color: #2a4b84; font-size: 9px; margin-right: 5px;"></i>
            <label style="font-size: 15px; color: #6A4F4F; margin-right: 5px;">{{ $informasi->pembuat }}</label>
            <p style="font-size: 15px; color: #00008B; margin: 0;"> - BK Kensasi</p> <!-- Perbaiki margin menjadi 0 -->
        </div>
    </div>

    <!-- Pindahkan bagian ini ke bawah judul -->
    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
        <div class="form-group" style="margin-bottom: 20px;">
            <i class="fa-solid fa-calendar-days" style="color: #2a4b84; font-size: 9px;"></i>
            <label style="font-size: 12px;"> {{ date('d-m-Y H:i', strtotime($informasi->tanggal_informasi)) }} WIB</label> <!-- Tambahkan "WIB" di sini -->
        </div>
    </div>

    <!-- Lanjutkan dengan bagian yang lain -->
    @if ($informasi->foto)
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 50px;">
            <div class="form-group">
                <img src="{{ asset('gambar/' . $informasi->foto) }}" alt="Gambar Informasi" width="auto" height="auto" class="center-image">
            </div>
        </div>
    @endif

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <div style="text-align: justify; text-justify: inter-word; margin: 0 50px;">{!! nl2br(e($informasi->isi_informasi)) !!}</div>
        </div>
    </div>
    <br>
</div>
<br>
@endsection



