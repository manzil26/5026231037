@extends('template')
@section('content')
    <!--<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> -->

    <h3>Data keranjang</h3>

    <a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}


        <div class="row">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <input type="number" name="kodebarang" required="required" class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Jumlah Pembelian
            </div>
            <div class="col-8">
                <input type="number" name="jumlah" required="required" class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Harga Per Item
            </div>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control"><br />
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>


    </body>
@endsection
