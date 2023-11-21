@extends('layanan.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laporkan Perundunganmu Disini</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('layanan.create') }}">Buat Laporan</a>
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
            <th>Nama</th>
            <th>Kelas</th>
            <th>Masalah</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($layanan as $layanansiswa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $layanansiswa->nama }}</td>
            <td>{{ $layanansiswa->kelas }}</td>
            <td>{{ $layanansiswa->masalah }}</td>

            <td>
                <form action="{{ route('layanan.destroy',$layanansiswa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('layanan.show',$layanansiswa->id) }}">Lihat</a>
    
                    <a class="btn btn-primary" href="{{ route('layanan.edit',$layanansiswa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {{ $layanan->links() }}
    </div>
      
@endsection