<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemograman Web</title>
    <link rel="icon" type="image/png" href="material/favicon-frontend.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poetsen+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <style>
        html,
        body {
            width: 100%;
            margin: 0;
            padding: 0;

        }

        .row {
            margin-right: 0;
            margin-left: 0;
        }

        .container {
            max-width: 100%;
            padding: 0;
        }

        .card {
            width: 80%;
            height: 85%;
            box-shadow: 0 4px 12px rgba(73, 30, 33, 0.5);
            border-radius: 8px;
            cursor: pointer;
            transition: width 0.3s ease, height 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        .card:hover {
            width: 90%;
            height: 90%;
            box-shadow: 0 8px 24px rgba(73, 30, 33, 0.8);
            transform: scale(1.05);
        }

        .btn {
            width: 100%;
            height: 20%;
            box-shadow: 0 4px 12px rgba(73, 30, 33, 0.5);
            border-radius: 8px;
            cursor: pointer;
            transition: width 0.3s ease, height 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {

            box-shadow: 0 8px 24px rgba(73, 30, 33, 0.8);
            transform: scale(1.05);


        }

        * {
            box-sizing: border-box;
        }


        body {
            max-width: 100%;

            overflow-x: hidden;


        }
    </style>




</head>
<!-- Navbar -->


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm p-3 w-100">

        <span class="navbar-brand mb-0 h1 text-center"
            style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; font-size: 30px;">
            Pemrograman Web
        </span>

    </nav>


    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid"
        style="background-image: url('material/bg-jumbotroon-frontend.png');
    background-size: cover;
    background-position: center;
    max-width: 100%;
    height: auto;
    display: block;
    width: 100%;
    padding: 60px 15px;">



        <div class="container text-center">

            <h1 class="display-4 justif text-center"
                style="color: #491e21; font-bold; font-family: 'Poetsen One', serif;  font-weight: 400;">Kelas D
            </h1>

            <p class="lead text-center" style="color: #491e21; font-bold; font-family: 'Poppins', serif;">Al-khiqmah
                Manzilatul Mukaromah</p>
            <p class="lead text-center" style="color: #491e21; font-bold; font-family: 'Poppins', serif;">5026231037
            </p>
        </div>
    </div>

    <p class="lead text-center"
        style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; margin-top: 10px; font-size: 40px; margin-bottom: 3%;">
        Tugas dan Ujian
    </p>

    <!-- ROW PERTAMA -->
    <div class="row">

        <!-- Belajar Buat web blog its -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">

            <div class="card p-3 mb-4 ">
                <div class="card-body">
                    <p class="lead text-center"
                        style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; margin-top: 10px; font-size: 20px;">
                        Artikel Blog ITS
                    </p>

                    <div class="service-icon"
                        style="display: flex; justify-content: center; align-items: center; height: 80px;">
                        <img src="material/icon-frontend.png" style="height: 80px;">
                    </div>



                    <a href="{{ url('pertama') }}" class="btn" role="button" data-bs-toggle="button"
                        style="background-color: #C7DB9C;  font-family: 'Poppins', sans-serif;
                            font-size:15px; margin-top: 10px; padding: 8px; border-radius: 4px;
                            color: #491e21; text-decoration: none;">Klik
                        Hasil
                    </a>


                </div>
            </div>


        </div>
        <!-- Belajar boostrap  -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">

            <div class="card p-3 mb-4 ">
                <div class="card-body">
                    <p class="lead text-center"
                        style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; margin-top: 10px; font-size: 20px;">
                        Belajar boostrap
                    </p>

                    <div class="service-icon"
                        style="display: flex; justify-content: center; align-items: center; height: 80px;">
                        <img src="material/icon-frontend.png" style="height: 80px;">
                    </div>



                    <a href="{{ url('boostrap1') }}" class="btn" role="button" data-bs-toggle="button"
                        style="background-color: #C7DB9C;  font-family: 'Poppins', sans-serif;
                            font-size:15px; margin-top: 10px; padding: 8px; border-radius: 4px;
                            color: #491e21; text-decoration: none;">Klik
                        Hasil
                    </a>


                </div>
            </div>


        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">
            <!-- Belajar JS1 -->
            <div class="card p-3 mb-4 ">
                <div class="card-body">
                    <p class="lead text-center"
                        style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; margin-top: 10px; font-size: 20px;">
                        Belajar JS1
                    </p>

                    <div class="service-icon"
                        style="display: flex; justify-content: center; align-items: center; height: 80px;">
                        <img src="material/icon-frontend.png" style="height: 80px;">
                    </div>



                    <a href="{{ url('js1') }}" class="btn" role="button" data-bs-toggle="button"
                        style="background-color: #C7DB9C;  font-family: 'Poppins', sans-serif;
                            font-size:15px; margin-top: 10px; padding: 8px; border-radius: 4px;
                            color: #491e21; text-decoration: none;">Klik
                        Hasil
                    </a>


                </div>
            </div>


        </div>









    </div>

    <!-- ROW KEDUA -->
    <div class="row">

        <!-- Belajar Buat web blog its -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">

            <div class="card p-3 mb-4 ">
                <div class="card-body">
                    <p class="lead text-center"
                        style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; margin-top: 10px; font-size: 20px;">
                        Belajar JS2
                    </p>

                    <div class="service-icon"
                        style="display: flex; justify-content: center; align-items: center; height: 80px;">
                        <img src="material/icon-frontend.png" style="height: 80px;">
                    </div>



                    <a href="{{ url('js2') }}" class="btn" role="button" data-bs-toggle="button"
                        style="background-color: #C7DB9C;  font-family: 'Poppins', sans-serif;
                            font-size:15px; margin-top: 10px; padding: 8px; border-radius: 4px;
                            color: #491e21; text-decoration: none;">Klik
                        Hasil
                    </a>


                </div>
            </div>


        </div>
        <!-- Belajar linktree  -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">

            <div class="card p-3 mb-4 ">
                <div class="card-body">
                    <p class="lead text-center"
                        style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; margin-top: 10px; font-size: 20px;">
                        Tugas linktree
                    </p>

                    <div class="service-icon"
                        style="display: flex; justify-content: center; align-items: center; height: 80px;">
                        <img src="material/icon-frontend.png" style="height: 80px;">
                    </div>



                    <a href="{{ url('linktree') }}" class="btn" role="button" data-bs-toggle="button"
                        style="background-color: #C7DB9C;  font-family: 'Poppins', sans-serif;
                            font-size:15px; margin-top: 10px; padding: 8px; border-radius: 4px;
                            color: #491e21; text-decoration: none;">Klik
                        Hasil
                    </a>


                </div>
            </div>


        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">
            <!-- Tugas Pertemuan -->
            <div class="card p-3 mb-4 ">
                <div class="card-body">
                    <p class="lead text-center"
                        style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; margin-top: 10px; font-size: 20px;">
                        Tugas Pertemuan 4 (layout)
                    </p>

                    <div class="service-icon"
                        style="display: flex; justify-content: center; align-items: center; height: 80px;">
                        <img src="material/icon-frontend.png" style="height: 80px;">
                    </div>

                    <a href="{{ url('pertemuan4') }}" class="btn" role="button" data-bs-toggle="button"
                        style="background-color: #C7DB9C;  font-family: 'Poppins', sans-serif;
                            font-size:15px; margin-top: 10px; padding: 8px; border-radius: 4px;
                            color: #491e21; text-decoration: none;">Klik
                        Hasil
                    </a>


                </div>
            </div>


        </div>









    </div>

    <!-- ROW KEDUA -->
    <div class="row">

        <!-- ETS -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">

            <div class="card p-3 mb-4 ">
                <div class="card-body">
                    <p class="lead text-center"
                        style="color: #491e21; font-family: 'Poetsen One', serif; font-weight: 400; margin-top: 10px; font-size: 20px;">
                        ETS
                    </p>

                    <div class="service-icon"
                        style="display: flex; justify-content: center; align-items: center; height: 80px;">
                        <img src="material/icon-frontend.png" style="height: 80px;">
                    </div>



                    <a href="{{ url('index') }}" class="btn" role="button" data-bs-toggle="button"
                        style="background-color: #C7DB9C;  font-family: 'Poppins', sans-serif;
                            font-size:15px; margin-top: 10px; padding: 8px; border-radius: 4px;
                            color: #491e21; text-decoration: none;">Klik
                        Hasil
                    </a>


                </div>
            </div>


        </div>

    </div>









    </div>

    </div>
</body>

</html>
