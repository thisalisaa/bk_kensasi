<!-- contoh.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Update Biodata</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('biodata.update', Auth::user()->id) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nisn:</strong>
                    <input type="text" name="nisn" value="{{ Auth::user()->nisn }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Lengkap:</strong>
                    <input class="form-control" name="nama" value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas:</strong>
                    <input class="form-control" name="kelas"  value="{{ Auth::user()->kelas }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <input class="form-control" name="jk"  value="{{ Auth::user()->jk }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tempat Tanggal Lahir:</strong>
                    <input class="form-control" name="ttl"  value="{{ Auth::user()->ttl }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agama/Kepercayaan:</strong>
                    <input class="form-control" name="agama" value="{{ Auth::user()->agama }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bahasa Pengantar Dirumah:</strong>
                    <input class="form-control" name="bahasa" value="{{ Auth::user()->bahasa }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Anak Ke:</strong>
                    <input class="form-control" name="anak_ke" value="{{ Auth::user()->anak_ke }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Saudara Kandung:</strong>
                    <input class="form-control" name="jumlah_saudara" value="{{ Auth::user()->jumlah_saudara }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat Peserta Didik/Siswa:</strong>
                    <input class="form-control" name="alamat_siswa" value="{{ Auth::user()->alamat_siswa }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Telepon/WA:</strong>
                    <input class="form-control" name="no_telepon" value="{{ Auth::user()->no_telepon }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tinggal Dengan:</strong>
                    <input class="form-control" name="tinggal_dengan" value="{{ Auth::user()->tinggal_dengan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jarak Dari Rumah Ke Sekolah:</strong>
                    <input class="form-control" name="jarak_kesekolah" value="{{ Auth::user()->jarak_kesekolah }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kendaraan Kesekolah:</strong>
                    <input class="form-control" name="kendaraan" value="{{ Auth::user()->kendaraan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal Sekolah SMP/MTS:</strong>
                    <input class="form-control" name="asal_sekolah" value="{{ Auth::user()->asal_sekolah }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Berat Badan:</strong>
                    <input class="form-control" name="bb" value="{{ Auth::user()->bb }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tinggi Badan:</strong>
                    <input class="form-control" name="tb" value="{{ Auth::user()->tb }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Golongan Darah:</strong>
                    <input class="form-control" name="gol_darah" value="{{ Auth::user()->gol_darah }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Riwayat Penyakit:</strong>
                    <input class="form-control" name="riwayat_penyakit" value="{{ Auth::user()->riwayat_penyakit }}">
                </div>
            </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
