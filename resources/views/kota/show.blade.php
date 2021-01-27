@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>SHOW DATA KOTA<b>
                <div class="card-body">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Kota</label>
                        <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" readonly> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kota</label>
                        <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" value="{{$kota->provinsi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">KEMBALI</a>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection
