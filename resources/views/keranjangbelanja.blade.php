@extends('template')

@section('content')
    <h3>Data Keranjang Belanja</h3>



    <a href="/keranjangbelanja/keranjang-tambah" class="btn btn-primary"> + Beli </a>
    </br>
    </br>


    <table class="table table-striped"> <!-- setiap row ganjil genap berbeda warna-->
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item </th>
            <th>Total </th>
            <th>Action </th>
        </tr>
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
    {{ $keranjangbelanja->links() }}
@endsection
