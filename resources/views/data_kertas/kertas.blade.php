@extends('template')

@section('content')
    <h3>Data Merek Kertas</h3>


    <a href="/kertas/kertas-tambah" class="btn btn-primary"> + Tambah Merek Kertas Baru</a>
    <p>Cari Data kertas :</p>

    <form action="/kertas/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari Kertas">
        <br />
        <input type="submit" class="btn btn-info" value="cari">

    </form>
    <br />



    <div class="table-responsive">
        <table class="table table-striped "> <!-- setiap row ganjil genap berbeda warna-->
            <thead class="thead" style="background-color: #FFD586">
                <tr>
                    <th>Merek Kertas</th>
                    <th>Harga Kertas</th>
                    <th>Ketersediaan</th>
                    <th>Berat</th>
                    <th>Opsi</th>

                </tr>
            </thead>
            @foreach ($kertas as $pg)
                <tr>
                    <td>{{ $pg->merkkertas }}</td>
                    <td>{{ $pg->hargakertas }}</td>
                    <td>
                        @if ($pg->tersedia == 1)
                            Tersedia
                        @else
                            Tidak Tersedia
                        @endif
                    </td>
                    <td>{{ $pg->berat }} kg</td>
                    <td>
                        <a href="/kertas/kertas-edit/{{ $pg->id }}" class="btn btn-success">Edit</a>
                        <a href="/kertas/hapus/{{ $pg->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    <!--  ini pagination-->
    {{ $kertas->links() }}
@endsection
