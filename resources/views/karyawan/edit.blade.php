@extends('layouts.app')

@section('content')
@if($errors->any)
@foreach ($errors->all() as $err)
<p class="alert alert-danger">{{$err}}</p>
@endforeach
@endif
<form action="{{url('karyawan/'.$data->nip)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3"></div>
            <h6 class="m-0 font-weight-bold text-primary">Formulir Edit Karyawan</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="number" class="form-control" name="nip" value="{{$data->nip}}">
                </div>



            <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" class="form-control" name="nama_karyawan" value="{{$data->nama_karyawan}}">


            </div>

                <div class="form-group">
                    <label>Gaji Karyawan</label>
                    <input type="number" class="form-control" name="gaji_karyawan" value="{{$data->gaji_karyawan}}"> >
                </div>



                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"> {{$data->alamat}} </textarea>
                </div>



                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" class="costom-select">
                        <option value="" selected disabled hidden>--Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" {{$data->jenis_kelamin == 'Laki-Laki' ? 'selected': ''}}>Laki-laki</option>
                        <option value="Perempuan" {{$data->jenis_kelamin == 'Perempuan' ? 'selected': ''}}>Perempuan</option>
                    </select>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
        </div>
    </div>
@endsection
