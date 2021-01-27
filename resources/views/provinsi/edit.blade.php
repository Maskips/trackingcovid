@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>EDIT DATA PROVINSI<b></div>

                <div class="card-body">
                <form action="{{route('provinsi.update', $provinsi->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control" required> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control" required>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
