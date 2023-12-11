@extends('layanan.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Keterangan Lain</h2>
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
   
<form action="{{ route('keteranganlain.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Apakah pernah berbicara dengan orang tua?</label>
                <input type="text" name="keterangan1" class="form-control" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Apakah berkomunikasi dengan saudara lain?</label>
                <input class="form-control" name="keterangan2" required></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Saya didalam keluarga:</label>
                <input class="form-control" name="keterangan3" required></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Ceritakan Masalah Terberat yang pernah dialami</label>
                <textarea name="keterangan4" class="form-control" required></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection