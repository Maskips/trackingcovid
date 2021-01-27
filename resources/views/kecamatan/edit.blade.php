@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>EDIT DATA KECAMATAN<b></div>

                <div class="card-body">
                <form action="{{route('kecamatan.update', $kecamatan->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Kecamatan</label>
                        <input type="text" name="kode_kecamatan" value="{{$kecamatan->kode_kecamatan}}" class="form-control" required> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kota</label>
                        <select name="id_kota" class="form-control" id="">
                        @foreach ($kota as $data)
                            <option value="{{$data->id}}">{{$data->nama_kota}}</option>
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
