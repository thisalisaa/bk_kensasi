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
            <li>NISN:  {{ Auth::user()->nisn }}</li> 
            <li>Nama Lengkap:  {{ Auth::user()->nama }}</li>
            <li>Kelas:  {{ Auth::user()->kelas }}</li>
            <li>Jenis Kelamin: {{ Auth::user()->jk }}</li>
            <li>Tempat,Tanggal Lahir:{{ Auth::user()->ttl }}</li>                                                       
            <li>Agama: {{ Auth::user()->agama }}</li>
            <li>Bahasa Pengantar DiRumah:{{ Auth::user()->bahasa }}</li>
            <li>Anak Ke:{{ Auth::user()->anak_ke }}</li>
            <li>Jumlah Saudara Kandung:{{ Auth::user()->jumlah_saudara }}</li>
            <li>Alamat:{{ Auth::user()->alamat }}</li>
            <li>Nomor Telepon/WA:{{ Auth::user()->no_telepon }}</li>
            <li>Tinggal Dengan:{{ Auth::user()->tinggal_dengan }}</li>
			<li>Jarak dari Rumah ke Sekolah:{{ Auth::user()->jarak_kesekolah }}</li>
			<li>Berangkat ke Sekolah:{{ Auth::user()->kendaraan }}</li>
			<li>Asal Sekolah SMP/MTS:{{ Auth::user()->asal_sekolah }}</li>
			<li>Berat Badan:{{ Auth::user()->bb }}</li>
			<li>Tinggi Badan:{{ Auth::user()->tb }}</li>
			<li>Golongan Darah:{{ Auth::user()->gol_darah }}</li>
			<li>Riwayat Penyakit:{{ Auth::user()->riwayat_penyakit }}</li>
        </ol>
		<h6>KETERANGAN PRIBADI</h6>
		<ol>
			<li>Nama Ayah:{{ Auth::user()->nama_ayah}}</li>
			<li>Pendidikan Terakhir Ayah:{{ Auth::user()->pendidikan_terakhir_ayah}}</li>
			<li>Alamat Ayah:{{ Auth::user()->alamat_lengkap_ayah}} </li>
			<li>Nomor telfon/WA:{{ Auth::user()->nomor_telepon_ayah}}</li>
			<li>Pekerjaan Ayah:{{ Auth::user()->pekerjaan_ayah}}</li>
			<li>Penghasilan:{{ Auth::user()->penghasilan_ayah}}</li>
			<li>Nama Ibu:{{ Auth::user()->nama_ibu}}</li>
			<li>Pendidikan Terakhir Ibu:{{ Auth::user()->pendidikan_terakhir_ibu}}</li>
			<li>Alamat Ibu:{{ Auth::user()->alamat_lengkap_ibu}}</li>
			<li>Nomor telfon/WA:{{ Auth::user()->nomor_telepon_ibu}}</li>
			<li>Pekerjaan Ibu:{{ Auth::user()->pekerjaan_ibu}}</li>
			<li>Penghasilan:{{ Auth::user()->penghasilan_ibu}}</li>
		</ol>
		<h6>KETERANGAN LAIN SISWA</h6>
		<ol>
			<li>Uang saku yang diberikan orang tua perhari:{{ Auth::user()->keterangan1}}</li>
			<li>Saya memilih SMKN 1 Sindang atas rekomendasi:{{ Auth::user()->keterangan2}}</li>
			<li>Program studi yang diminati:{{ Auth::user()->keterangan3}} </li>
			<li>Prestasi yang pernah diperoleh: {{ Auth::user()->keterangan4}}</li>
			<li>Minat setelah lulus SMK:{{ Auth::user()->keterangan5}}</li>
			<li>Cita-cita pekerjaan:{{ Auth::user()->keterangan6}}</li>
			<li>Kegiatan Ekstrakulikuler:{{ Auth::user()->keterangan7}}</li>
			<li>Apakah kamu pernah membaca/menonton vidio porno?{{ Auth::user()->keterangan8}}</li>
			<li>Apakah kamu pernah memakai obat-obatan terlarang?{{ Auth::user()->keterangan9}}</li>
			<li>Apakah kamu pernah merokok?{{ Auth::user()->keterangan10}}</li>
			<li>Apakah orang tua memberikan perhatian ke kamu?{{ Auth::user()->keterangan11}}</li>
			<li>Apakah kamu berbicara dengan orang tua di rumah?{{ Auth::user()->keterangan12}}</li>
			<li>Berkomunikasi dengan saudara/keluarga lainnya{{ Auth::user()->keterangan13}}</li>
			<li>Saya didalam keluarga: {{ Auth::user()->keterangan14}}</li>
			<li>Ceritakan masalah paling berat yang pernah kamu alami: {{ Auth::user()->keterangan15}}</li>
		</ol>
	</div>

</body>
</html>