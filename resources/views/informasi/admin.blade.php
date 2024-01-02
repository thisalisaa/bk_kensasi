@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-start mb-3">
    <a href="{{ route('informasi.create') }}" class="btn btn-success">
        <i class="fas fa-plus-circle mr-2"></i> Tambahkan Informasi
    </a>
</div>
@if ($message = Session::get('success',))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" >
    @foreach ($informasi as $info)
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card custom-card">
                @if ($info->foto)
                <img src="{{ asset('gambar/' . $info->foto) }}" class="card-img-top center-image" alt="...">
                @else
                <!-- Foto default jika tidak ada foto yang diinputkan -->
                <img src="{{ asset('asset/office-building.png') }}" class="card-img-top center-image" alt="Default Photo">
                @endif
                <hr>
                <div class="card-body">
                    <h5 class="card-title" >{{ $info->judul_informasi }}</h5>
                    <p class="card-text">{{ $info->isi_informasi }}</p>
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
@endsection


