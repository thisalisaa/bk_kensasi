@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Update Data Orang Tua</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('biodata1.ortuupdate', Auth::user()->id) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <!-- Data Ayah -->
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="nama_ayah" class="form-label"><strong>Nama Ayah</strong></label>
                        <input type="text" id="nama_ayah" name="nama_ayah" value="{{ Auth::user()->nama_ayah != '-' ? Auth::user()->nama_ayah : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="pendidikan_terakhir_ayah" class="form-label"><strong>Pendidikan Terakhir Ayah</strong></label>
                        <input type="text" id="pendidikan_terakhir_ayah" name="pendidikan_terakhir_ayah" value="{{ Auth::user()->pendidikan_terakhir_ayah != '-' ? Auth::user()->pendidikan_terakhir_ayah : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="alamat_lengkap_ayah" class="form-label"><strong>Alamat Lengkap Ayah</strong></label>
                        <input type="text" id="alamat_lengkap_ayah" name="alamat_lengkap_ayah" value="{{ Auth::user()->alamat_lengkap_ayah != '-' ? Auth::user()->alamat_lengkap_ayah : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="nomor_telepon_ayah" class="form-label"><strong>Nomor Telepon Ayah</strong></label>
                        <input type="text" id="nomor_telepon_ayah" name="nomor_telepon_ayah" value="{{ Auth::user()->nomor_telepon_ayah != '-' ? Auth::user()->nomor_telepon_ayah : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="pekerjaan_ayah" class="form-label"><strong>Pekerjaan Ayah</strong></label>
                        <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" value="{{ Auth::user()->pekerjaan_ayah != '-' ? Auth::user()->pekerjaan_ayah : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="penghasilan_ayah" class="form-label"><strong>Penghasilan Ayah</strong></label>
                        <input type="text" id="penghasilan_ayah" name="penghasilan_ayah" value="{{ Auth::user()->penghasilan_ayah != '-' ? Auth::user()->penghasilan_ayah : '' }}" class="form-control">
                    </div>
                </div>

                <!-- Data Ibu -->
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="nama_ibu" class="form-label"><strong>Nama Ibu</strong></label>
                        <input type="text" id="nama_ibu" name="nama_ibu" value="{{ Auth::user()->nama_ibu != '-' ? Auth::user()->nama_ibu : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="pendidikan_terakhir_ibu" class="form-label"><strong>Pendidikan Terakhir Ibu</strong></label>
                        <input type="text" id="pendidikan_terakhir_ibu" name="pendidikan_terakhir_ibu" value="{{ Auth::user()->pendidikan_terakhir_ibu != '-' ? Auth::user()->pendidikan_terakhir_ibu : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="alamat_lengkap_ibu" class="form-label"><strong>Alamat Lengkap Ibu</strong></label>
                        <input type="text" id="alamat_lengkap_ibu" name="alamat_lengkap_ibu" value="{{ Auth::user()->alamat_lengkap_ibu != '-' ? Auth::user()->alamat_lengkap_ibu : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="nomor_telepon_ibu" class="form-label"><strong>Nomor Telepon Ibu</strong></label>
                        <input type="text" id="nomor_telepon_ibu" name="nomor_telepon_ibu" value="{{ Auth::user()->nomor_telepon_ibu != '-' ? Auth::user()->nomor_telepon_ibu : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="pekerjaan_ibu" class="form-label"><strong>Pekerjaan Ibu</strong></label>
                        <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" value="{{ Auth::user()->pekerjaan_ibu != '-' ? Auth::user()->pekerjaan_ibu : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="penghasilan_ibu" class="form-label"><strong>Penghasilan Ibu</strong></label>
                        <input type="text" id="penghasilan_ibu" name="penghasilan_ibu" value="{{ Auth::user()->penghasilan_ibu != '-' ? Auth::user()->penghasilan_ibu : '' }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-success btn-round">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection