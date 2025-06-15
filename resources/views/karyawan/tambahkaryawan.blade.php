@extends('template')

@section('content')
    <div class="container mt-4">
        <h3>Tambah Data Karyawan</h3>

        <a href="/karyawan" class="btn btn-info mb-3"> Kembali</a>

        <br />
        <br />

        <form action="/karyawan/store" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-3">
                    Kode Pegawai
                </div>
                <div class="col-8">
                    <input type="text" name="kodepegawai" required="required" class="form-control" maxlength="5">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    Nama Lengkap
                </div>
                <div class="col-8">
                    <input type="text" name="namalengkap" required="required" class="form-control" maxlength="50">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    Divisi
                </div>
                <div class="col-8">
                    <input type="text" name="divisi" required="required" class="form-control" maxlength="5">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-3">
                    Departemen
                </div>
                <div class="col-8">
                    <input type="text" name="departemen" required="required" class="form-control" maxlength="5">
                </div>
            </div>
            <br />
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    </div>
@endsection
