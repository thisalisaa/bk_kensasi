@extends('keteranganlain.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Lihat Laporan</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('keteranganlain.index') }}">Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apakah pernah berbicara dengan orang tua: {{ $keterangan->keterangan1 }}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apakah berkomunikasi dengan saudara lain: {{ $keterangan->keterangan2 }}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Saya didalam keluarga: {{ $keterangan->keterangan3 }}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ceritakan Masalah Terberat yang pernah dialami: {{ $keterangan->keterangan4 }}</strong>
            </div>
        </div>
    </div>
@endsection
