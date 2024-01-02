@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Edit Informasi</h4>
        </div>
        <div class="card-body">
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

            <form action="{{ route('informasi.update', $info->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul_informasi" class="form-label">Judul Informasi</label>
                    <input type="text" name="judul_informasi" value="{{ $info->judul_informasi }}" class="form-control" placeholder="Judul">
                </div>

                <div class="mb-3">
                    <label for="pembuat" class="form-label">Dibuat Oleh</label>
                    <input class="form-control" name="pembuat" placeholder="Pembuat" value="{{ $info->pembuat }}">
                </div>

                <div class="mb-3">
                    <label for="tanggal_informasi" class="form-label">Tanggal Informasi</label>
                    <input type="datetime-local" name="tanggal_informasi" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($info->tanggal_informasi)) }}">
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    @if($info->foto)
                        <p>{{ $info->foto }}</p>
                    @else
                        <p>Tidak ada gambar</p>
                    @endif
                    <input type="file" name="foto" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="isi_informasi" class="form-label">Isi Informasi</label>
                    <textarea class="form-control" name="isi_informasi" placeholder="Isi" rows="8">{{ $info->isi_informasi }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Perbarui</button>
                    <a class="btn btn-primary" href="{{ route('informasi.index') }}"> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


