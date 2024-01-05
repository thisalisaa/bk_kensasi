@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="card card-primary card-outline card-outline-tabs col-md-12">
        <div class="card-header p-0 border-bottom-0">
            <!-- Tambahkan kelas 'justify-content-center' pada elemen 'nav' di bawah ini -->
            <ul class="nav nav-tabs justify-content-center" id="formulir-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata1/data-siswa*') ? 'active' : '' }}" href="{{ url('/biodata/data-siswa') }}">Biodata Diri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata1/orang-tua*') ? 'active' : '' }}" href="{{ url('/biodata/orang-tua') }}">Orang Tua</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata1/keterangan-lain*') ? 'active' : '' }}" href="{{ url('/biodata/keterangan-lain') }}">Keterangan Lain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('biodata1/unduh-data*') ? 'active' : '' }}" href="{{ url('/biodata/unduh-data') }}">Unduh Data</a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
        <div class="tab-pane fade show active" id="data-siswa" role="tabpanel" aria-labelledby="data-siswa-tab">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="m-0">Keterangan Lain <b>{{ Auth::user()->name }}</b></h5>
                        <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('biodata1.ketedit', Auth::user()->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Perbarui Biodata
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container mt-4">
                <div class="card card-primary card-outline card-outline-tabs">
                    <table class="table table-striped table-responsive-sm">
                        <tbody>
                            <tr>
                                <th style="width: 300px">Uang Saku Perhari</th>
                                <td>
                                @if(Auth::user()->keterangan1 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan1 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Memilih SMKN 1 Sindang Atas Rekomendasi</th>
                                <td>
                                @if(Auth::user()->keterangan2 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan2 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Program Studi Yang Diminati </th>
                                <td>
                                @if(Auth::user()->keterangan3 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan3 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Prestasi Yang Pernah Diperoleh</th>
                                <td>
                                @if(Auth::user()->keterangan4 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan4 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Minat Setelah Lulus SMK</th>
                                <td>
                                @if(Auth::user()->keterangan5 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan5 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Cita-cita Pekerjaan</th>
                                <td>
                                @if(Auth::user()->keterangan6 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan6 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Kegiatan Ekstrakulikuler</th>
                                <td>
                                @if(Auth::user()->keterangan7 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan7 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Apakah Kamu Pernah Menonton Video Porno</th>
                                <td>
                                @if(Auth::user()->keterangan8 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan8 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Apakah Kamu Pernah Memakai Obat-obatan Terlarang</th>
                                <td>
                                @if(Auth::user()->keterangan9 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan9 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Apakah Kamu Pernah Merokokn</th>
                                <td>
                                @if(Auth::user()->keterangan10 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan10 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Apakah Orang Tua Memberikan Perhatian Ke Kamu</th>
                                <td>
                                @if(Auth::user()->keterangan11 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan11 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Apakah Kamu Berbicara Dengan Orang Tua DiRumah</th>
                                <td>
                                @if(Auth::user()->keterangan12 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan12 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Apakah Kamu Berkomunikasi Dengan Saudara</th>
                                <td>
                                @if(Auth::user()->keterangan13 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan13 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Saya Di Dalam Keluarga</th>
                                <td>
                                @if(Auth::user()->keterangan14 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan14 }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Masalah Paling Berat Yang Pernah Kamu Alami</th>
                                <td>
                                @if(Auth::user()->keterangan15 == '-')
                                    <span style="color: red;">Perbarui keterangan ini</span>
                                    @else
                                    {{ Auth::user()->keterangan15 }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection