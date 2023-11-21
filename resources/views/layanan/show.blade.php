@extends('layanan.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Lihat Laporan</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('layanan.index') }}">Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $layanan->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas:</strong>
                {{ $layanan->nama }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Masalah:</strong>
                {{ $layanan->masalah }}
            </div>
        </div>
    </div>
@endsection