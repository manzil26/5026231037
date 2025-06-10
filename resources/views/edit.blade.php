@extends('template')
@section('content')

    <body>


        <h3>Edit Pegawai</h3>

        <div class="btn">

        </div>
        <a href="/pegawai" class="btn btn-info"> Kembali</a>

        <br />
        <br />

        @foreach ($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
                <div class="row">
                    <div class="col-3">
                        Nama
                    </div>
                    <div class="col-8">
                        <input class="form-control" type="text" required="required" name="nama"
                            value="{{ $p->pegawai_nama }}"> <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        Jabatan
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" required="required" name="jabatan"
                            value="{{ $p->pegawai_jabatan }}"> <br />
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        Umur
                    </div>
                    <div class="col-8">
                        <input type="number" class="form-control" required="required" name="umur"
                            value="{{ $p->pegawai_umur }}"> <br />
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        Alamat
                    </div>
                    <div class="col-8">
                        <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br />
                        <input type="submit" value="Simpan Data " class="btn btn-success">
                    </div>
                </div>






            </form>
        @endforeach


    </body>
@endsection
