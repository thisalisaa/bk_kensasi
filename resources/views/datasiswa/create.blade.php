@extends('datasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="text-center">
            <h2>Biodata Siswa</h2>
    </div>
        <div>
            <a class="btn btn-primary" href="{{ route('datasiswa.index') }}">Kembali</a>
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

<form action="{{ route('datasiswa.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>NISN:</label>
                <input type="text" name="nisn" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Nama Lengkap:</label>
                <input class="form-control" name="nama" ></input>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Kelas:</label>
                <input class="form-control" name="kelas" ></input>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <input class="form-control" name="jk" ></input>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Tempat Tanggal Lahir:</label>
                <input class="form-control" name="ttl" ></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Agama/Kepercayaaan:</label>
                <input class="form-control" name="agama"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Bahasa Pengantar Dirumah:</label>
                <input class="form-control" name="bahasa" ></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Anak Ke:</label>
                <input class="form-control" name="anak_ke"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Jumlah Saudara Kandung:</label>
                <input class="form-control" name="jumlah_saudara"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Alamat Peserta Didik/Siswa:</label>
                <input class="form-control" name="alamat_siswa"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Nomor Telepon/WA:</label>
                <input class="form-control" name="no_telepon"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Tinggal dengan:</label>
                <input class="form-control" name="tinggal_dengan"></input>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Jarak Dari Rumah Ke Sekolah:</label>
                <input class="form-control" name="jarak_kesekolah"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Kendaraan Kesekolah:</label>
                <input class="form-control" name="kendaraan"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Asal Sekolah SMP/MTS:</label>
                <input class="form-control" name="asal sekolah"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Berat Badan:</label>
                <input class="form-control" name="bb"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Tinggi Badan:</label>
                <input class="form-control" name="tb"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Golongan Darah:</label>
                <input class="form-control" name="gol_darah"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label>Riwayat Penyakit:</label>
                <input class="form-control" name="riwayat_penyakit"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <a class="btn btn-primary" href="{{ route('datasiswa.index') }}">Next</a>
        </div>
    </div>

</form>
@endsection