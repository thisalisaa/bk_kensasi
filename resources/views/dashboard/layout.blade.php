<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="{{ asset('dash\styles.css') }}">
</head>
<body>

    <header>
        <div class="navbar">
            <div class="contact-info">
                <span class="phone">
                    <img src="{{ asset('dash\img4.gif') }}" alt="Phone Icon" class="phone-icon">
                    +123456789
                </span>

                <span class="email">
                    <img src="{{ asset('dash\img5.gif') }}" alt="Email Icon" class="email-icon">
                    example@example.com
                </span>
            </div>
        </div>
    </header>

    <nav class="nav-links">
        <a href="#">Beranda</a>
        <a href="#">Data</a>
        <a href="#">Informasi</a>
        <div class="additional-info">
            <img src="{{ asset('dash\image1.gif') }}" alt="Data Image">
            <b>DATA SMKN 1 SINDANG</b>
        </div>
    </nav>

    <main>
        @yield('content')

        <div class="click-box-container">
            <div class="click-box">
                <img src="{{ asset('dash\img1.gif') }}" alt="Image 1" class="box-image">
                <b class="box-label">Buat data</b>
                <hr class="horizontal-line">
                <a href="#" class="click-text">Klik disini</a>
            </div>
            <div class="click-box">
                <img src="{{ asset('dash\img2.gif') }}" alt="Image 2" class="box-image">
                <b class="box-label">Biodata Saya</b>
                <hr class="horizontal-line">
                <a href="#" class="click-text">Klik disini</a>
            </div>
            <div class="click-box">
                <img src="{{ asset('dash\img3.gif') }}" alt="Image 3" class="box-image">
                <b class="box-label">Perbaharui Biodata</b>
                <hr class="horizontal-line">
                <a href="#" class="click-text">Klik disini</a>
            </div>
        </div>
    </main>

</body>
</html>
