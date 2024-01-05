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
    </div>
</div>
<div class="tab-content">
        <div class="tab-pane fade show active" id="data-siswa" role="tabpanel" aria-labelledby="data-siswa-tab">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="m-0">Orang Tua/Wali <b>{{ Auth::user()->name }}</b></h5>
                        <div class="btn-group btn-group-sm" role="group">
                        <a href="{{ route('biodata1.ortuedit', Auth::user()->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Perbarui Data Orang Tua
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
                                <th style="width: 300px">Nama Ayah / Wali</th>
                                <td>@if(Auth::user()->nama_ayah== '-')
                                    <span style="color: red;">Perbarui data ayah</span>
                                    @else
                                    {{ Auth::user()->nama_ayah}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Pendidikan Terakhir Ayah / Wali</th>
                                <td>@if(Auth::user()->pendidikan_terakhir_ayah== '-')
                                    <span style="color: red;">Perbarui data pendidikan</span>
                                    @else
                                    {{ Auth::user()->pendidikan_terakhir_ayah}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Alamat Ayah / Wali Lengkap</th>
                                <td>@if(Auth::user()->alamat_lengkap_ayah== '-')
                                    <span style="color: red;">Perbarui data alamat</span>
                                    @else
                                    {{ Auth::user()->alamat_lengkap_ayah}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nomor Telepon / WA</th>
                                <td>@if(Auth::user()->nomor_telepon_ayah== '-')
                                    <span style="color: red;">Perbarui nomor telepon</span>
                                    @else
                                    {{ Auth::user()->nomor_telepon_ayah}}
                                    @endif</td>
                            </tr>
                                <th style="width: 300px">Pekerjaan Ayah / Wali</th>
                                <td>@if(Auth::user()->pekerjaan_ayah== '-')
                                    <span style="color: red;">Perbarui data pekerjaan</span>
                                    @else
                                    {{ Auth::user()->pekerjaan_ayah}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Penghasilan Perbulan Ayah / Wali</th>
                                <td>@if(Auth::user()->penghasilan_ayah== '-')
                                    <span style="color: red;">Perbarui data ayah</span>
                                    @else
                                    {{ Auth::user()->nama_ayah}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nama Ibu / Wali</th>
                                <td>@if(Auth::user()->nama_ibu== '-')
                                    <span style="color: red;">Perbarui data ibu</span>
                                    @else
                                    {{ Auth::user()->nama_ibu}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Pendidikan Terakhir Ibu / Wali</th>
                                <td>@if(Auth::user()->pendidikan_terakhir_ibu== '-')
                                    <span style="color: red;">Perbarui data pendidikan</span>
                                    @else
                                    {{ Auth::user()->pendidikan_terakhir_ibu}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Alamat Ibu / Wali Lengkap</th>
                                <td>@if(Auth::user()->alamat_lengkap_ibu== '-')
                                    <span style="color: red;">Perbarui data alamat</span>
                                    @else
                                    {{ Auth::user()->alamat_lengkap_ibu}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Nomor Telepon / WA</th>
                                <td>@if(Auth::user()->nomor_telepon_ibu== '-')
                                    <span style="color: red;">Perbarui nomor telepon</span>
                                    @else
                                    {{ Auth::user()->nomor_telepon_ibu}}
                                    @endif</td>
                            </tr>
                                <th style="width: 300px">Pekerjaan Ibu / Wali</th>
                                <td>@if(Auth::user()->pekerjaan_ibu== '-')
                                    <span style="color: red;">Perbarui data pekerjaan</span>
                                    @else
                                    {{ Auth::user()->pekerjaan_ibu}}
                                    @endif</td>
                            </tr>
                            <tr>
                                <th style="width: 300px">Penghasilan Perbulan Ibu / Wali</th>
                                <td>@if(Auth::user()->penghasilan_ibu== '-')
                                    <span style="color: red;">Perbarui data ibu</span>
                                    @else
                                    {{ Auth::user()->nama_ibu}}
                                    @endif</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
    </div>
    </div>
</div>
@endsection

