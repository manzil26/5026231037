<!DOCTYPE html>
<html lang="en">

<head>
    <title>Al-khiqmah Manzilatul Mukaromah : 5026231037</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        .jumbotron {
            background-color: #9de2e2;
            height: 100px;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm p-3 w-100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="frontend">All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penggaris">Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/keranjangbelanja">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan1">Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="jumbotron jumbotron-fluid"
        style="background-image: url('{{ asset('material/bg-jumbotroon-frontend.png') }}');
    background-size: cover;
    background-position: center;
    max-width: 100%;
    height: auto;
    display: block;
    width: 100%;
    padding: 60px 15px;">



        <div class="container text-center">

            <h1 class="display-4 justif text-center"
                style="color: #491e21; font-bold; font-family: 'Poetsen One', serif;  font-weight: 400;">5026231037 :
                Al-khiqmah Manzilatul M.
            </h1>



            </p>
        </div>
    </div>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
