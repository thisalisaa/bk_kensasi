@extends('datasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit data siswa</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('datasiswa.index') }}"> Back</a>
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

    <form action="{{ route('datasiswa.update',$datasiswa->id_siswa) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nisn:</strong>
                    <input type="text" name="nisn" value="{{ $datasiswa->nisn }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Lengkap:</strong>
                    <input class="form-control" name="nama" value="{{ $datasiswa->nama }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <input class="form-control" name="kelas"  value="{{ $datasiswa->kelas }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <input class="form-control" name="jk" value="{{ $datasiswa->jk }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tempat Tanggal Lahir:</strong>
                    <input class="form-control" name="ttl" placeholder="Kelas" value="{{ $datasiswa->ttl }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agama/Kepercayaan:</strong>
                    <input class="form-control" name="agama" value="{{ $datasiswa->agama }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bahasa Pengantar Dirumah:</strong>
                    <input class="form-control" name="bahasa" value="{{ $datasiswa->bahasa }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Anak Ke:</strong>
                    <input class="form-control" name="anak_ke" value="{{ $datasiswa->anak_ke }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Saudara Kandung:</strong>
                    <input class="form-control" name="jumlah_saudara" value="{{ $datasiswa->jumlah_saudara }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Peserta Didik/Siswa:</strong>
                    <input class="form-control" name="alamat_siswa" value="{{ $datasiswa->alamat_siswa }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Telepon/WA:</strong>
                    <input class="form-control" name="no_telepon" value="{{ $datasiswa->no_telepon }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tinggal Dengan:</strong>
                    <input class="form-control" name="tinggal_dengan" value="{{ $datasiswa->tinggal_dengan}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jarak Dari Rumah Ke Sekolah:</strong>
                    <input class="form-control" name="jarak_kesekolah" value="{{ $datasiswa->jarak_kesekolah}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kendaraan Kesekolah:</strong>
                    <input class="form-control" name="kendaraan" value="{{ $datasiswa->kendaraan}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal Sekolah SMP/MTS:</strong>
                    <input class="form-control" name="asal_sekolah" value="{{ $datasiswa->asal_sekolah}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Berat Badan:</strong>
                    <input class="form-control" name="bb" value="{{ $datasiswa->bb}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tinggi Badan:</strong>
                    <input class="form-control" name="tb" value="{{ $datasiswa->tb}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Golongan Darah:</strong>
                    <input class="form-control" name="gol_darah" value="{{ $datasiswa->gol_darah}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Riwayat Penyakit:</strong>
                    <input class="form-control" name="riwayat_penyakit" value="{{ $datasiswa->riwayat_penyakit}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection