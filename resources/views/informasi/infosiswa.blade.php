@extends('layouts.app')

@section('content')

<div class="text-center mt-4 mb-20">
    <h1 style="font-size: 30px;"><b>BURSA KERJA KHUSUS SMKN 1 SINDANG</b></h1>
</div>

<div class="container text-center">
    <div class="row mb-5 mt-5">
    @foreach ($informasi as $sis)
        <div class="col-md-4">
        <div class="col-12 col-md-12 col-lg-12 mt-4">
            <div class="card mb-3" style="max-width: 540px;">
            <a href="{{ route('informasi.show', $sis->id) }}" style="color: inherit; text-decoration: none">
                <div class="row">
                    
                    <div class="col-md-6">
                        @if ($sis->foto)
                            <img src="{{ asset('gambar/' . $sis->foto) }}" class="img-fluid rounded-start" alt="..." style="width: 150px; height: 140px; margin-top: 10px;">
                        @else
                            <!-- Foto default jika tidak ada foto yang diinputkan -->
                            <img src="{{ asset('assets/image/office-building.png') }}" class="img-fluid rounded-start" alt="Default Photo" style="width: 150px; height: 140px; margin-top: 20px;">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 style="text-align: justify; text-justify: inter-word;" class="card-title"><b>{{ $sis->judul_informasi }}</b></h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <div style="text-align: justify; text-justify: inter-word;" class="card-text">{{ Str::limit($sis->isi_informasi, 100, '...')  }}</div>
                        </div>
                        <!-- <div class="card-body">
                        <a href="{{ route('informasi.show', $sis->id) }}" class="btn btn-info">Show</a>
                        </div> -->
                    </div>
                    
                </div>
                </a>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>

<br>
@endsection


