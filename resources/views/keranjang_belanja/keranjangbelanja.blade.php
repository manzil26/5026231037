@extends('template')

@section('content')
    <h3>Data Keranjang Belanja</h3>

    <form action="/karyawan/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Kode Barang .." value="{{ $cari ?? '' }}">
        <br />
        <input type="submit" class="btn btn-info" value="CARI">
    </form>

    <br />

    <a href="/keranjangbelanja/keranjang-tambah" class="btn btn-primary"> + Beli </a>
    </br>
    </br>
    <div class="table-responsive">

        <table class="table table-striped "> <!-- setiap row ganjil genap berbeda warna-->
            <thead class="thead" style="background-color: #FFD586">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga per item </th>
                    <th>Total </th>
                    <th>Action </th>
                </tr>
            </thead>
            @foreach ($keranjangbelanja as $k)
                <tr>
                    <td> {{ $k->id }}</td>
                    <td> {{ $k->kodebarang }}</td>
                    <td> {{ $k->jumlah }}</td>
                    <td> RP. {{ $k->harga }}</td>
                    <td> RP. {{ $k->jumlah * $k->harga }}</td>
                    <td>

                        <a href="/keranjangbelanja/hapus/{{ $k->id }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>

    {{ $keranjangbelanja->links() }}
@endsection
