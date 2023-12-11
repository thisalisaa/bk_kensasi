@extends('layanan.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Edit Keterangan</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('keteranganlain.index') }}">Kembali</a>
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

<form action="{{ route('keteranganlain.update', $keterangansiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apakah pernah berbicara dengan orang tua?:</strong>
                <input type="text" name="keterangan1" value="{{ $keterangansiswa->keterangan1 }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apakah berkomunikasi dengan saudara lain?</strong>
                <input class="form-control" name="keterangan2" value="{{ $keterangansiswa->keterangan2 }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Saya didalam keluarga:</strong>
                <input class="form-control" name="keterangan3" value="{{ $keterangansiswa->keterangan3 }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ceritakan Masalah Terberat yang pernah dialami:</strong>
                <textarea name="keterangan4" class="form-control">{{ $keterangansiswa->keterangan4 }}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection
