@extends('ibu.layout')

@section('content')
    <h1>Data Ayah</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Ayah</th>
                <th>Pendidikan Terakhir</th>
                <th>Alamat Lengkap</th>
                <th>Nomor Telepon</th>
                <th>Pekerjaan</th>
                <th>Penghasilan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ayah as $ayah)
                <tr>
                    <td>{{ $ayah->id_ayah }}</td>
                    <td>{{ $ayah->nama }}</td>
                    <td>{{ $ayah->pendidikan_terakhir }}</td>
                    <td>{{ $ayah->alamat_lengkap }}</td>
                    <td>{{ $ayah->nomor_telepon }}</td>
                    <td>{{ $ayah->pekerjaan }}</td>
                    <td>{{ $ayah->penghasilan }}</td>
                    <td>
                        <a href="{{ route('ayah.edit', $ayah->id_ayah) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('ayah.destroy', $ayah->id_ayah) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('ayah.create') }}" class="btn btn-primary">Tambah Ayah</a>
@endsection
