@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>CREATE DATA KELURAHAN<b>
                <div class="card-body">
                <form action="{{route('kelurahan.store')}}" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kode Kelurahan</label>
                        <input type="number" name="kode_kelurahan" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('kode_kelurahan'))
                            <span class="text-danger">{{ $errors->first('kode_kelurahan') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('nama_kelurahan'))
                            <span class="text-danger">{{ $errors->first('nama_kelurahan') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                        <select name="id_kecamatan" class="form-control" id="">
                        @foreach ($kecamatan as $data)
                            <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                        @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
