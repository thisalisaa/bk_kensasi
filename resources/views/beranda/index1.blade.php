<!DOCTYPE html>
<html>
<head>
    <title>LayananBimbingan</title>
    <link rel="stylesheet" href="{{asset('css/beranda.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="p-3 bg-primary text-white">
        <div class="informasi">
        <img src="assets/image/telephone.png" alt="telephone" width="20px" height="20px">
        <p class="no">0838-9377-9890</p>
        <div class="emailpng">
        <img src="assets/image/email.png" alt="email" width="20px" height="20px" class="emailimg">
        </div>
        <p class="email">smkn.1sindang@yahoo.co.id</p> 
        </div>
    </div>


    
    <div class="p-3  bg-body text-body">
        <div class="logo">
        <img src="assets/image/logo87 (1).png" alt="logo" width="150px" height="150px">
        <h1>BK SMKN 1 Sindang</h1> 
        <!-- <div class="motto">
        <h4>Welcome to Center of Excellent School</h4>
        </div> -->
        <div class="navbar">
        <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/beranda') }}">Beranda</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('datasiswa.create') }}">Buat Data</a></li>
            <li><a class="dropdown-item" href="{{ url('/biodata/data-siswa') }}">Biodata Saya</a></li>
        </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/informasi') }}">Informasi</a>
        </li>
        </div>
        </div>  
    </div>
    <div class="p-3 bg-primary-subtle text-emphasis-primary">
        <h4 class="link">Yuk Bergabung</h4>
        <p class="narasi">
        Pelayanan bimbingan dan konseling sekolah merupakan usaha membantu peserta didik dalam pengembangan kehidupan pribadi,
        kehidupan sosial, kegiatan belajar, serta perencanaan dan pengembangan karir.
        </p>
        <div class="bk">
        <img src="assets/image/bk.png" alt="bk" width="400px" height="400px">
        <p class="motto2">Guru BK Sahabat Siswa</p>
        </div>
    </div>
    <div class="p-3 bg-white text-dark">
    <div class="image">
    <img src="assets/image/personal-information.png" alt="biodata" width="150px" height="150px" class="mb-3">
    <img src="assets/image/file.png" alt="informasi" width="150px" height="150px" class="mb-3">
    <img src="assets/image/problem.png" alt="pengajuan" width="150px" height="150px" class="mb-3">
    </div>
    </div>
    
    <div class="p-3 bg-primary text-white">
    <div class="footer" style="display: flex; align-items: center;">
        <img src="assets/image/logo87 (1).png" alt="logo" width="85px" height="85px">
        <h5 class="bkensasi" style="margin-left: 10px;">BK SMK Negeri 1 Sindang</h5>
    </div>
        <!-- <p>
            Platform BK Sekolah ini didedikasikan untuk Layanan Bimbingan dan Konseling
            di SMKN 1 Sindang. Platform ini menyediakan banyak fitur yang akan menjadi alat bantu
            Konselor Sekolah/Guru Bimbingan dan Konseling
        </p> -->
        <div class="alamat">
        <img src="assets/image/map.png" alt="address" width="50px" height="50px">
        <p class="text-center">
            Jl. Mayor Dasuki No.3b, Penganjang, Kec. Sindang, Kabupaten Indramayu, Jawa Barat 45221
        </p>
        </div>
    </div>
</div>

</body>
</html>
