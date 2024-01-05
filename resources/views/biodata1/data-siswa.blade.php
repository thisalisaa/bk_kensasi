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

    <div class="tab-content mb-5">
        <div class="tab-pane fade show active" id="data-siswa" role="tabpanel" aria-labelledby="data-siswa-tab">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="m-0">Biodata <b>{{ Auth::user()->name }}</b></h5>
                        <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('biodata1.edit', Auth::user()->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Perbarui Biodata
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container mt-5">
            <div class="card card-primary card-outline card-outline-tabs">
                    <table class="table table-striped table-responsive-sm">
                        <tbody>
                            <tr>
                                <th style="width: 300px">NISN</th>
                                <td>
                                @if(Auth::user()->nisn == '-')
                                    <span style="color: red;">Perbarui nisn</span>
                                    @else
                                    {{ Auth::user()->nisn }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nama Lengkap</th>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Kelas</th>
                                <td>
                                    @if(Auth::user()->kelas == '-')
                                    <span style="color: red;">Perbarui kelas</span>
                                    @else
                                    {{ Auth::user()->kelas }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jenis Kelamin</th>
                                <td>
                                @if(Auth::user()->jk == '-')
                                    <span style="color: red;">Perbarui Jenis Kelamin</span>
                                    @else
                                    {{ Auth::user()->jk }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tempat Tanggal Lahir</th>
                                <td>@if(Auth::user()->ttl == '-')
                                    <span style="color: red;">Perbarui TTL</span>
                                    @else
                                    {{ Auth::user()->ttl }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Agama</th>
                                <td>@if(Auth::user()->agama == '-')
                                    <span style="color: red;">Perbarui agama</span>
                                    @else
                                    {{ Auth::user()->agama }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Bahasa Pengantar Dirumah</th>
                                <td>@if(Auth::user()->bahasa== '-')
                                    <span style="color: red;">Perbarui Bahasa</span>
                                    @else
                                    {{ Auth::user()->bahasa }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Anak Ke-</th>
                                <td>@if(Auth::user()->anak_ke== '-')
                                    <span style="color: red;">Perbarui Anak</span>
                                    @else
                                    {{ Auth::user()->anak_ke }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jumlah Saudara Kandung</th>
                                <td>@if(Auth::user()->jumlah_saudara== '-')
                                    <span style="color: red;">Perbarui jumlah saudara</span>
                                    @else
                                    {{ Auth::user()->jumlah_saudara }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Alamat Siswa</th>
                                <td>@if(Auth::user()->alamat_siswa== '-')
                                    <span style="color: red;">Perbarui alamat</span>
                                    @else
                                    {{ Auth::user()->alamat_siswa }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">No Telepon/WA</th>
                                <td>@if(Auth::user()->no_telepon== '-')
                                    <span style="color: red;">Perbarui nomer</span>
                                    @else
                                    {{ Auth::user()->no_telepon }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tinggal Dengan</th>
                                <td>@if(Auth::user()->tinggal_dengan== '-')
                                    <span style="color: red;">Perbarui tinggal_dengan</span>
                                    @else
                                    {{ Auth::user()->tinggal_dengan }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Jarak Dari Rumah Ke Sekolah</th>
                                <td>@if(Auth::user()->jarak_kesekolah== '-')
                                    <span style="color: red;">Perbarui jarak</span>
                                    @else
                                    {{ Auth::user()->jarak_kesekolah }} km
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Berangkat Ke Sekolah</th>
                                <td>@if(Auth::user()->kendaraan== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->kendaraan }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Asal Sekolah SMP/MTS</th>
                                <td>@if(Auth::user()->asal_sekolah== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->asal_sekolah }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Berat Badan</th>
                                <td>@if(Auth::user()->bb== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->bb }} kg
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Tinggi Badan</th>
                                <td>@if(Auth::user()->tb== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->tb }} cm
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Golongan Darah</th>
                                <td>@if(Auth::user()->gol_darah== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->gol_darah }}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Riwayat Penyakit</th>
                                <td>@if(Auth::user()->riwayat_penyakit== '-')
                                    <span style="color: red;">Perbarui berangkat</span>
                                    @else
                                    {{ Auth::user()->riwayat_penyakit }}
                                    @endif</td>
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

