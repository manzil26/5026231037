@extends('template')
@section('content')

    <body>

        <div class="btn">

        </div>
        <a href="/penggaris" class="btn btn-info"> Kembali</a>

        <br />
        <br />

        <div class="card text-center shadow  mb-5 bg-white rounded ">
            <div class="card-header " style="background-color: #FFD586;  color: #491e21;">
                <h3>Edit Merek Penggaris</h3>
            </div>
            <div class="card-body">
                @foreach ($penggaris as $pg)
                    <form action="/penggaris/update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $pg->penggaris_id }}"> <br />
                        <div class="row">
                            <div class="col-3">

                                Merek Penggaris
                            </div>
                            <div class="col-8">
                                <input class="form-control" type="text" required="required" name="nama"
                                    value="{{ $pg->merekpenggaris }}"> <br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                Harga
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" required="required" name="harga"
                                    value="{{ $pg->hargapenggaris }}"> <br />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                Ketersediaan
                            </div>
                            <div class="col-8">
                                <select class="form-control" name="ketersediaan" required>
                                    @if ($pg->tersedia == 1)
                                        <option value="1" selected>Tersedia</option>
                                        <option value="0">Tidak Tersedia</option>
                                    @else
                                        <option value="1">Tersedia</option>
                                        <option value="0" selected>Tidak Tersedia</option>
                                    @endif
                                </select> <br />
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-3">
                                Berat
                            </div>
                            <div class="col-8">

                                <input type="number" step="any" name="berat" required="required" class="form-control"
                                    value="{{ $pg->berat }}"><br />
                                <input type="submit" value="Simpan Data" class="btn btn-success">
                            </div>
                        </div>







                    </form>
                @endforeach

            </div>
        </div>

    </body>
@endsection
