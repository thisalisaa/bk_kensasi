@extends('layouts.app')

@section('content')

    <h2>Biodata Siswa</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NISN</th>
                <th>Detail</th>
        
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->kelas }}</td>
                <td>{{ $user->nisn }}</td>
                <td>
                <a class="nav-link {{ Request::is('users/detail-data*') ? 'active' : '' }}" href="{{ url('/users/detail-data') }}">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

