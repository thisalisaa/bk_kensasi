<!-- resources/views/ibu/index.blade.php -->

@extends('ibu.layout')

@section('content')
    <h2>Data Ibu</h2>
    <a href="{{ route('ayah.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pendidikan Terakhir</th>
                <th>Alamat Lengkap</th>
                <th>Nomor Telepon</th>
                <th>Pekerjaan</th>
                <th>Penghasilan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ibu as $ibu)
                <tr>
                    <td>{{ $ibu->nama }}</td>
                    <td>{{ $ibu->pendidikan_terakhir }}</td>
                    <td>{{ $ibu->alamat_lengkap }}</td>
                    <td>{{ $ibu->nomor_telepon }}</td>
                    <td>{{ $ibu->pekerjaan }}</td>
                    <td>{{ $ibu->penghasilan }}</td>
                    <td>
                        <a href="{{ route('ibu.edit', $ibu->id_ibu) }}" class="btn btn-warning">Edit</a>
                        <form method="POST" action="{{ route('ibu.destroy', $ibu->id_ibu) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
