@extends('layouts.app')

@section('content')

<div class="container text-center">
<div class="text-center mt-4 mb-5">
    <h1 style="font-size: 30px;"><b>BURSA KERJA KHUSUS SMKN 1 SINDANG</b></h1>
</div>

<div class="d-flex justify-content-start mb-5 mt-3">
    <a href="{{ route('informasi.create') }}" class="btn btn-success">
        <i class="fas fa-plus-circle mr-2"></i> Tambahkan Informasi
    </a>
</div>
@if ($message = Session::get('success',))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5" >
    @foreach ($informasi as $info)
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card custom-card">
                @if ($info->foto)
                <img src="{{ asset('gambar/' . $info->foto) }}" class="card-img-top center-image" alt="...">
                @else
                <!-- Foto default jika tidak ada foto yang diinputkan -->
                <img src="{{ asset('assets/image/office-building.png') }}" class="card-img-top center-image" alt="Default Photo">
                @endif
                <hr>
                <div class="card-body">
                    <h5 class="card-title" >{{ $info->judul_informasi }}</h5>
                    <div style="text-align: justify; text-justify: inter-word;" class="card-text"> {{ Str::limit($info->isi_informasi, 100, '.....')  }}</div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dibuat Oleh : {{ $info->pembuat }}</li>
                    <li class="list-group-item">Diubah Pada : {{ $info->tanggal_informasi }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('informasi.show', $info->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('informasi.edit', $info->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('informasi.destroy', $info->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row text-center">
    {{ $informasi->links() }}
</div>
</div>
@endsection


