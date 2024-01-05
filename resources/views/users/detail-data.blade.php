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
        
        <li>NISN:  {{ $user->nisn }}</li> 
        <li>Nama Lengkap:  {{ $user->nama }}</li>
        <li>Kelas:  {{ $user->kelas }}</li>
        <li>Jenis Kelamin: {{ $user->jk }}</li>
        <li>Tempat, Tanggal Lahir: {{ $user->ttl }}</li>                                                       
        <li>Agama: {{ $user->agama }}</li>
        <li>Bahasa Pengantar Di Rumah: {{ $user->bahasa }}</li>
        <li>Anak Ke: {{ $user->anak_ke }}</li>
        <li>Jumlah Saudara Kandung: {{ $user->jumlah_saudara }}</li>
        <li>Alamat: {{ $user->alamat }}</li>
        <li>Nomor Telepon/WA: {{ $user->no_telepon }}</li>
        <li>Tinggal Dengan: {{ $user->tinggal_dengan }}</li>
        <li>Jarak dari Rumah ke Sekolah: {{ $user->jarak_kesekolah }}</li>
        <li>Berangkat ke Sekolah: {{ $user->kendaraan }}</li>
        <li>Asal Sekolah SMP/MTS: {{ $user->asal_sekolah }}</li>
        <li>Berat Badan: {{ $user->bb }}</li>
        <li>Tinggi Badan: {{ $user->tb }}</li>
        <li>Golongan Darah: {{ $user->gol_darah }}</li>
        <li>Riwayat Penyakit: {{ $user->riwayat_penyakit }}</li>
        </ol>
		<h6>KETERANGAN PRIBADI</h6>
		<ol>
			<li>Nama Ayah:{{  $user->nama_ayah}}</li>
			<li>Pendidikan Terakhir Ayah:{{  $user->pendidikan_terakhir_ayah}}</li>
			<li>Alamat Ayah:{{  $user->alamat_lengkap_ayah}} </li>
			<li>Nomor telfon/WA:{{ $user->nomor_telepon_ayah}}</li>
			<li>Pekerjaan Ayah:{{ $user->pekerjaan_ayah}}</li>
			<li>Penghasilan:{{  $user->penghasilan_ayah}}</li>
			<li>Nama Ibu:{{  $user->nama_ibu}}</li>
			<li>Pendidikan Terakhir Ibu:{{ $user->pendidikan_terakhir_ibu}}</li>
			<li>Alamat Ibu:{{ $user->alamat_lengkap_ibu}}</li>
			<li>Nomor telfon/WA:{{ $user->nomor_telepon_ibu}}</li>
			<li>Pekerjaan Ibu:{{  $user->pekerjaan_ibu}}</li>
			<li>Penghasilan:{{  $user->penghasilan_ibu}}</li>
		</ol>
		<h6>KETERANGAN LAIN SISWA</h6>
		<ol>
			<li>Uang saku yang diberikan orang tua perhari:{{  $user->keterangan1}}</li>
			<li>Saya memilih SMKN 1 Sindang atas rekomendasi:{{  $user->keterangan2}}</li>
			<li>Program studi yang diminati:{{  $user->keterangan3}} </li>
			<li>Prestasi yang pernah diperoleh: {{  $user->keterangan4}}</li>
			<li>Minat setelah lulus SMK:{{  $user->keterangan5}}</li>
			<li>Cita-cita pekerjaan:{{  $user->keterangan6}}</li>
			<li>Kegiatan Ekstrakulikuler:{{  $user->keterangan7}}</li>
			<li>Apakah kamu pernah membaca/menonton vidio porno?{{  $user->keterangan8}}</li>
			<li>Apakah kamu pernah memakai obat-obatan terlarang?{{  $user->keterangan9}}</li>
			<li>Apakah kamu pernah merokok?{{  $user->keterangan10}}</li>
			<li>Apakah orang tua memberikan perhatian ke kamu?{{ $user->keterangan11}}</li>
			<li>Apakah kamu berbicara dengan orang tua di rumah?{{ $user->keterangan12}}</li>
			<li>Berkomunikasi dengan saudara/keluarga lainnya{{ $user->keterangan13}}</li>
			<li>Saya didalam keluarga: {{  $user->keterangan14}}</li>
			<li>Ceritakan masalah paling berat yang pernah kamu alami: {{  $user->keterangan15}}</li>
		</ol>
	</div>

</body>
</html>