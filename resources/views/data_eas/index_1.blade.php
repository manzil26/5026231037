@extends('template')

@section('content')
    <h3>Data Pegawai</h3>




    </br>
    </br>
    <div class="table-responsive">

        <table class="table table-striped "> <!-- setiap row ganjil genap berbeda warna-->
            <thead class="thead" style="background-color: #FFD586">
                <tr>
                    <th>Kode Pegawai</th>
                    <th>Nama Lengkap</th>
                    <th>Divisi</th>
                    <th>Departemen</th>
                    <th> </th>
                </tr>
            </thead>
            @foreach ($mykaryawan as $pg)
                <tr>
                    <td> {{ $pg->kodepegawai }}</td>
                    <td> {{ $pg->namalengkap }}</td>
                    <td> {{ $pg->divisi }}</td>
                    <td> {{ $pg->departemen }}</td>


                    <td>
                        <a href="/index_eas/view/{{ $pg->kodepegawai }}" class="btn btn-success">View</a>
                        <a href="/index_eas/edit/{{ $pg->kodepegawai }}" class="btn btn-success">Edit</a>



                    </td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
