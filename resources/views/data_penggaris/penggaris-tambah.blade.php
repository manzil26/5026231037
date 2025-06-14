@extends('template')
@section('content')
    <!--<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> -->



    <a href="/penggaris" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <div class="card text-center shadow  mb-5 bg-white rounded ">
        <div class="card-header " style="background-color: #FFD586;  color: #491e21;">
            <h3>Data Pegawai</h3>
        </div>
        <div class="card-body">
            <form action="/penggaris/store" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-3">

                        Merek Penggaris
                    </div>
                    <div class="col-8">
                        <input class="form-control" type="text" required="required" name="nama"> <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        Harga
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" required="required" name="harga"> <br />
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        Ketersediaan
                    </div>
                    <div class="col-8">
                        <select class="form-control" name="ketersediaan" required>
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                        <br />
                    </div>
                </div>


                <div class="row">
                    <div class="col-3">
                        Berat
                    </div>
                    <div class="col-8">
                        <input type="number" step="any" name="berat" required="required" class="form-control"><br />
                        <input type="submit" value="Simpan Data " class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>



    </body>
@endsection
