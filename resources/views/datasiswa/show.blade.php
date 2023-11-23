@extends('datasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show data</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('datasiswa.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nisn:</strong>
                {{ $datasiswa->nisn }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap:</strong>
                {{ $datasiswa->nama }}
            </div>
        </div>
    </div>
@endsection