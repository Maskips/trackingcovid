@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div class="card-header"><b>EDIT DATA KOTA<b></div>

                <div class="card-body">
                <form action="{{route('kota.update', $kota->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Kota</label>
                        <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" required> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kota</label>
                        <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                        <select name="id_provinsi" class="form-control" id="">
                        @foreach ($provinsi as $data)
                            <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                        @endforeach
                        </select>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
        </div>
    </div>
</div>
@endsection
