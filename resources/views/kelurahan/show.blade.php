@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>SHOW DATA KELURAHAN<b>
                <div class="card-body">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Kelurahan</label>
                        <input type="text" name="kode_kelurahan" value="{{$kelurahan->kode_kelurahan}}" class="form-control" readonly> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" value="{{$kelurahan->kecamatan->nama_kecamatan}}" class="form-control" readonly>
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
