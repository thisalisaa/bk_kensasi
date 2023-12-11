<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
		<center>
			<!-- <h4>Membuat Laporan PDF Dengan DOMPDF Laravel</h4> -->
			<!-- <h5><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
		</center>
		<br/>
		<a href="/biodata/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>NISN</th>
					<th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
					<th>Alamat</th>
                    <th>Tanggal Lahir</th>
					<th>Agama</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($biodata as $p)
				<tr>
					<td>{{ $i++ }}</td>
                    <td>{{$p->nisn}}</td>
					<td>{{$p->nama}}</td>
					<td>{{$p->kelas}}</td>
					<td>{{$p->jenis_kelamin}}</td>
					<td>{{$p->alamat}}</td>
					<td>{{$p->tanggal_lahir}}</td>
                    <td>{{$p->agama}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

</body>
</html>