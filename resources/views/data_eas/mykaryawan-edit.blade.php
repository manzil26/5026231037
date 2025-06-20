@extends('template')
@section('content')

    <body>

        <div class="btn">

        </div>
        <a href="/index_eas" class="btn btn-info"> Kembali</a>


        <br />
        <br />

        <div class="card text-center shadow  mb-5 bg-white rounded ">
            <div class="card-header " style="background-color: #FFD586;  color: #491e21;">
                <h3>Edit Karyawa</h3>
            </div>
            <div class="card-body">
                <form action="/index_eas/update" method="post">
                    @csrf
                    <input type="hidden" name="kodepegawai" value="{{ $pg->kodepegawai }}">

                    <div class="row">
                        <div class="col-3">

                            kode Pegawai
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" name="kodepegawai" value="{{ $pg->kodepegawai }} ">
                            <br />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Nama Lengkap
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" required="required" name="namalengkap"
                                value="{{ ucwords(strtolower($pg->namalengkap)) }}"> <br />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            Divisi
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" required="required" name="divisi"
                                value="{{ $pg->divisi }}"> <br />
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-3">
                            departemen
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" required="required" name="departemen"
                                value="{{ $pg->departemen }}"> <br />
                        </div>
                    </div>
                    <input type="submit" value="Simpan Data" class="btn btn-success">



                </form>


            </div>
        </div>

    </body>
@endsection
