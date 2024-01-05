@extends('layouts.app')

@section('content')

<!-- contoh.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Update Biodata</h4>
        </div>

        <div class="card-body">
            </div>
        </div>
        <div class="row">
    <form action="{{ route('biodata1.ketupdate', Auth::user()->id) }}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>uang saku yang diberikan orang tua perhari</strong>
                    <input class="form-control" name="keterangan1"
                        value="{{ Auth::user()->keterangan1 != '-' ? Auth::user()->keterangan1 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>saya memilih smk negeri 1 sindang atas rekomendasi</strong>
                    <input class="form-control" name="keterangan2"
                        value="{{ Auth::user()->keterangan2 != '-' ? Auth::user()->keterangan2 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>program studi yang diminati</strong>
                    <input class="form-control" name="keterangan3"
                        value="{{ Auth::user()->keterangan3 != '-' ? Auth::user()->keterangan3 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>prestasi yang pernah diperoleh</strong>
                    <input class="form-control" name="keterangan4"
                        value="{{ Auth::user()->keterangan4 != '-' ? Auth::user()->keterangan4 : ''}}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>minat setelah lulus SMK</strong>
                    <input class="form-control" name="keterangan5"
                        value="{{ Auth::user()->keterangan5  != '-' ? Auth::user()->keterangan5 : ''}}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>cita-cita pekerjaan</strong>
                    <input class="form-control" name="keterangan6"
                        value="{{ Auth::user()->keterangan6 != '-' ? Auth::user()->keterangan6 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>kegiatan ekstrakulikuler</strong>
                    <input class="form-control" name="keterangan7"
                        value="{{ Auth::user()->keterangan7 != '-' ? Auth::user()->keterangan7 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>apakah kamu pernah membaca/menonton vidio porno?</strong>
                    <input class="form-control" name="keterangan8"
                        value="{{ Auth::user()->keterangan8 != '-' ? Auth::user()->keterangan8 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>apakah pernah memakai obat-obatan terlarang?</strong>
                    <input class="form-control" name="keterangan9"
                        value="{{ Auth::user()->keterangan9 != '-' ? Auth::user()->keterangan9 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>apakah kamu pernah merokok</strong>
                    <input class="form-control" name="keterangan10"
                        value="{{ Auth::user()->keterangan10 != '-' ? Auth::user()->keterangan10 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>apakah orang tua memberikan perhatian ke kamu?</strong>
                    <input class="form-control" name="keterangan11"
                        value="{{ Auth::user()->keterangan11 != '-' ? Auth::user()->keterangan11 : '' }}">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>apakah pernah berbicara dengan orang tua?</strong>
                    <input type="text" name="keterangan12"
                        value="{{ Auth::user()->keterangan12 != '-' ? Auth::user()->keterangan12 : '' }}"
                        class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>apakah berkomunikasi dengan saudara lain?</strong>
                    <input class="form-control" name="keterangan13"
                        value="{{ Auth::user()->keterangan13 != '-' ? Auth::user()->keterangan14 : ''}}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>saya didalam keluarga</strong>
                    <input class="form-control" name="keterangan14"
                        value="{{ Auth::user()->keterangan14 != '-' ? Auth::user()->keterangan14 : '' }}">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>ceritakan masalah yang paling berat yang pernah kamu alami</strong>
                    <input class="form-control" name="keterangan15"
                        value="{{ Auth::user()->keterangan15 != '-' ? Auth::user()->keterangan15 : '' }}">
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success btn-round">Submit</button>
        </div>

    <!-- </div> -->
    </form>
</div>
</div>
</div>
@endsection