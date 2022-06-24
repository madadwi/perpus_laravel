<!DOCTYPE html>
<!doctype html>
<html lang="id">

<head>
    <link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>mobile</title>
</head>

<body class="bg-white">
    <div class="position-relative" id="container">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
            <div class="container d-flex justify-content-between align-items-center">
                <h4 class="">Perpustakaan Laravel</h4>

                <a href="{{ url('/books') }}" class="btn btn-danger">login</a>


            </div>
        </nav>

</html>
<section class="d-flex justify-content-center align-items-center main-section">
    <div class="container">
        <div class="row align-items-center gap-lg-0 gap-3">
            <div class="col-lg-6 order-lg-1 order-2">
                <h5 class="">Halo Semua 👋, Selamat datang di</h5>
                <h1>Pepustakaan</h1>
                <p class="lh-lg">
                    Silahkan Login Terlebih Dahulu !!
                </p>

                @if (Route::has('login'))
                <a href="{{ url('/books') }}" class="btn btn-danger">login</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-danger">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                @endif
            </div>
            @endif

        </div>
        <div class="col-lg-6 order-lg-2 order-1">
            <img class="w-100 rounded-3" src="{{ asset('img/saly-16.png') }}" alt="Abseen">
        </div>
    </div>
</section>
</div>
<!-- <div class="col-lg-6 order-lg-2 order-1">
    <img class="w-100 rounded-3" src="{{ asset('img/vasily-koloda-8CqDvPuo_kI-unsplash.jpg') }}" alt="Abseen">
</div> -->
<script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/volt.js') }}"></script>
</body>

</html>
