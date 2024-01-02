@extends('layouts.app')

@section('content')
<div class="p-3 bg-primary-subtle text-emphasis-primary" style="">
    <div class="content-container" style="display: flex; align-items: center; justify-content: space-between; gap: 20px;">
        <div class="text-content" style="flex: 1; padding-right: 50px;">
            <h4 class="link">Yuk Bergabung!!</h4>
            <p class="narasi">
                Pelayanan bimbingan dan konseling sekolah
                merupakan usaha membantu peserta didik
                dalam pengembangan kehidupan pribadi,
                kehidupan sosial, kegiatan belajar, serta
                perencanaan dan pengembangan karir
            </p>
        </div>
        <div class="image-content" style="flex: 1; text-align: center; padding-right: 5px;">
            <img src="assets/image/bk.png" alt="bk" style="max-width: 100%; height: auto;">
            <p class="motto2" style="margin-top: 10px;">Guru BK Sahabat Siswa</p>
        </div>
    </div>
</div>


<div class="p-3 text-dark" style="background-color: #D6EDF6; display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 20px;">
    <div class="icon-container" style="text-align: center; padding: 10px;">
        <img src="assets/image/personal-information.png" alt="biodata" width="150px" height="150px">
        <p style="margin-top: 20px;">Data Siswa</p>
    </div>
    <div style="text-align: center; margin: 0 10px;">
        <img src="assets/image/file.png" alt="informasi" width="150px" height="150px">
        <p style="margin-top: 20px;">Informasi</p>
    </div>
    <div style="text-align: center; margin: 0 10px;">
        <img src="assets/image/problem.png" alt="pengajuan" width="150px" height="150px">
        <p style="margin-top: 20px;">Pengajuan Perundungan</p>
    </div>
</div>
@endsection





