<!-- resources/views/layout/ibu.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ibu</title>

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="{{ asset('style.css') }}"> <!-- Make sure this path is correct -->

    <!-- Add your additional stylesheets or other head content here -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #73BEDF;">
        <a class="navbar-brand">
            <img src="{{ asset('application.png') }}" alt="Icon" width="30" height="30">
            Keterangan Orang Tua/Wali
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container mt-3">
        @yield('content')
    </div>

    <!-- Bootstrap JS and Popper.js (Optional, but needed for some Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
