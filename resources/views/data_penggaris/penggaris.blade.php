@extends('template')

@section('content')
    <h3>Data Merek Penggaris</h3>


    <a href="/penggaris/penggaris-tambah" class="btn btn-primary"> + Tambah Merek Penggaris Baru</a>
    <p>Cari Data penggaris :</p>

    <form action="/penggaris/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Penggaris">
        <br />
        <input type="submit" class="btn btn-info" value="cari">

    </form>
    <br />



    <div class="table-responsive">
        <table class="table table-striped "> <!-- setiap row ganjil genap berbeda warna-->
            <thead class="thead" style="background-color: #FFD586">
                <tr>
                    <th>Merek Penggaris</th>
                    <th>Harga Penggaris</th>
                    <th>Ketersediaan</th>
                    <th>Berat</th>
                    <th>Opsi</th>

                </tr>
            </thead>
            @foreach ($penggaris as $pg)
                <tr>
                    <td>{{ $pg->merekpenggaris }}</td>
                    <td>{{ $pg->hargapenggaris }}</td>
                    <td>
                        @if ($pg->tersedia == 1)
                            Tersedia
                        @else
                            Tidak Tersedia
                        @endif
                    </td>
                    <td>{{ $pg->berat }} kg</td>
                    <td>
                        <a href="/penggaris/penggaris-edit/{{ $pg->penggaris_id }}" class="btn btn-success">Edit</a>
                        <a href="/penggaris/hapus/{{ $pg->penggaris_id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    <!--  ini pagination-->
    {{ $penggaris->links() }}
@endsection
