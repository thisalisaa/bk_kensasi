@extends('layouts.app')

@section('content')
<style>

    .informasi-pemagangan {
        font-size: 20px;
    }

    .smkn-text {
        font-size: 13px;
    }

    .custom-card {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        background-color: #02B3FF;
    }

    .custom-card:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        background-color: #ADD8E6;
    }

    .card-body {
        max-height: 150px;
        overflow: hidden;
        
    }

    .custom-card img {
        margin-top: 10px;
        margin-bottom: 0px;
        max-height: 100px; /* Sesuaikan dengan kebutuhan Anda */
        width: auto;
    }
    
</style>


<div class="row text-center">
    @foreach ($informasi as $sis)
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex">
                        @if ($sis->foto)
                            <img src="{{ asset('gambar/' . $sis->foto) }}" class="img-fluid rounded-start" alt="..." style="width: 150px; height: 140px; margin-top: 20px;">
                        @else
                            <!-- Foto default jika tidak ada foto yang diinputkan -->
                            <img src="{{ asset('asset/office-building.png') }}" class="img-fluid rounded-start" alt="Default Photo" style="width: 150px; height: 140px; margin-top: 20px;">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 style="text-align: justify; text-justify: inter-word;" class="card-title">{{ $sis->judul_informasi }}</h5>
                            <div style="text-align: justify; text-justify: inter-word;" class="card-text">{{ $sis->isi_informasi }}</div>
                        </div>
                        <div class="card-body">
                        <a href="{{ route('informasi.show', $sis->id) }}" class="btn btn-info">Show</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<br>
@endsection


