@extends('keteranganlain.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Keterangan Lain</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('keteranganlain.create') }}">Buat Data</a>
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
            <th>No.</th>
            <th>Apakah pernah berbicara dengan orang tua</th>
            <th>Apakah berkomunikasi dengan saudara lain</th>
            <th>Saya didalam keluarga</th>
            <th>Ceritakan Masalah Terberat yang pernah dialami</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($keterangan as $keterangansiswa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $keterangansiswa->keterangan1 }}</td>
            <td>{{ $keterangansiswa->keterangan2 }}</td>
            <td>{{ $keterangansiswa->keterangan3 }}</td>
            <td>{{ $keterangansiswa->keterangan4 }}</td>
            <td>
                <form action="{{ route('keteranganlain.destroy',$keterangansiswa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('keteranganlain.show',$keterangansiswa->id) }}">Lihat</a>
    
                    <a class="btn btn-primary" href="{{ route('keteranganlain.edit',$keterangansiswa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {{ $keterangan->links() }}
    </div>
    
@endsection