@extends('datasiswa.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laravel 9 CRUD School Application</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('datasiswa.create') }}">Create New Student</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>JK</th>
            <th>TTL</th>
            <th>Agama</th>
            <th>Bahasa</th>
            <th>Anak Ke</th>
            <th>Jumlah Saudara</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Tinggal Dengan</th>
            <th>Jarak Kesekolah</th>
            <th>Kendaraan </th>
            <th>Asal Sekolah</th>
            <th>BB</th>
            <th>TB</th>
            <th>Golongan Darah</th>
            <th>Riwayat Penyakit</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($datasiswa as $siswa)
            <tr>
                <td>{{ $siswa->id_siswa }}</td>
                <td>
                <img src="{{ asset('fotosiswa/' . $siswa->foto_siswa) }}" alt="Foto Siswa" style="max-width: 100px; max-height: 150px;"></td>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->jk }}</td>
                <td>{{ $siswa->ttl }}</td>
                <td>{{ $siswa->agama }}</td>
                <td>{{ $siswa->bahasa }}</td>
                <td>{{ $siswa->anak_ke }}</td>
                <td>{{ $siswa->jumlah_saudara }}</td>
                <td>{{ $siswa->alamat_siswa }}</td>
                <td>{{ $siswa->no_telepon }}</td>
                <td>{{ $siswa->tinggal_dengan }}</td>
                <td>{{ $siswa->jarak_kesekolah }}</td>
                <td>{{ $siswa->kendaraan }}</td>
                <td>{{ $siswa->asal_sekolah }}</td>
                <td>{{ $siswa->bb }}</td>
                <td>{{ $siswa->tb }}</td>
                <td>{{ $siswa->gol_darah }}</td>
                <td>{{ $siswa->riwayat_penyakit }}</td>
                <td>
                    <form action="{{ route('datasiswa.destroy', $siswa->id_siswa) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('datasiswa.show', $siswa->id_siswa) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('datasiswa.edit', $siswa->id_siswa) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {{ $datasiswa->links() }}
    </div>
@endsection
