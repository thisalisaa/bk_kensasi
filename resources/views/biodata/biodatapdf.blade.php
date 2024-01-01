<!DOCTYPE html>
<html>
<head>
	<title>Unduh PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<img src="" alt="">
		<center>
			<h5>PEMERINTAH PROVINSI JAWA BARAT</h5>
            <h5>SMK NEGERI 1 SINDANG</h5>
            <h5>KARTU BK</h5>
		</center>
		<br/>
		<h6>KETERANGAN PRIBADI</h6>
		<ol>
			@foreach($biodata as $p)
            <li>NISN: {{$p->nisn}}</li> 
            <li>Nama Lengkap: {{$p->nama}}</li>
            <li>Kelas: {{$p->kelas}}</li>
            <li>Jenis Kelamin: {{$p->jenis_kelamin}}</li>
            <li>Tempat,Tanggal Lahir:</li>v                                                            
            <li>Agama: {{$p->agama}}</li>
            <li>Bahasa Pengantar DiRumah:{{$p->bahasa}}</li>
            <li>Anak Ke:{{$p->anak}}</li>
            <li>Jumlah Saudara Kandung:{{$p->jumlah_saudara}}</li>
            <li>Alamat:{{$p->alamat}}</li>
            <li>Nomor Telepon/WA:{{$p->telepon}}</li>
            <li>Tinggal Dengan:</li>
			<li>Jarak dari Rumah ke Sekolah:</li>
			<li>Berangkat ke Sekolah:</li>
			<li>Asal Sekolah SMP/MTS:</li>
			<li>Berat Badan:</li>
			<li>Tinggi Badan:</li>
			<li>Golongan Darah:</li>
			<li>Riwayat Penyakit:</li>
			@endforeach
        </ol>
		<h6>KETERANGAN PRIBADI</h6>
		<ol>
			<li>Nama Ayah:</li>
			<li>Pendidikan Terakhir Ayah:</li>
			<li>Alamat Ayah: </li>
			<li>Nomor telfon/WA: </li>
			<li>Pekerjaan Ayah:</li>
			<li>Penghasilan:</li>
			<li>Nama Ibu:</li>
			<li>Pendidikan Terakhir Ibu:</li>
			<li>Alamat Ibu: </li>
			<li>Nomor telfon/WA: </li>
			<li>Pekerjaan Ibu:</li>
			<li>Penghasilan:</li>
		</ol>
		<h6>KETERANGAN LAIN SISWA</h6>
		<ol>
			<li>Uang saku yang diberikan orang tua perhari:</li>
			<li>Saya memilih SMKN 1 Sindang atas rekomendasi:</li>
			<li>Program studi yang diminati: </li>
			<li>Prestasi yang pernah diperoleh: </li>
			<li>Minat setelah lulus SMK:</li>
			<li>Cita-cita pekerjaan:</li>
			<li>Kegiatan Ekstrakulikuler:</li>
			<li>Apakah kamu pernah membaca/menonton vidio porno?</li>
			<li>Apakah kamu pernah memakai obat-obatan terlarang?</li>
			<li>Apakah kamu pernah merokok?</li>
			<li>Apakah orang tua memberikan perhatian ke kamu?</li>
			<li>Apakah kamu berbicara dengan orang tua di rumah?</li>
			<li>Berkomunikasi dengan saudara/keluarga lainnya</li>
			<li>Saya didalam keluarga: </li>
			<li>Ceritakan masalah paling berat yang pernah kamu alami: </li>
		</ol>
			<!-- <tbody>
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
		</tbody> -->
	</div>

</body>
</html>