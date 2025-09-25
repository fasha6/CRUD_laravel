@extends('layouts.app')
@section('content')
<form action="{{ route('karyawan.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3"></div>
            <h6>Formulir Tambah Karyawan</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="number" class="form-control" name="nip" >
                </div>



            <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" class="form-control" name="nama_karyawan">


            </div>

                <div class="form-group">
                    <label>Gaji Karyawan</label>
                    <input type="number" class="form-control" name="gaji_karyawan" >
                </div>



                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"></textarea>
                </div>



                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" class="costom-select">
                        <option value="" selected disabled hidden>--Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
        </div>
    </div>
@endsection
