@extends('layouts.admin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div class="card-header"><b>CREATE DATA KOTA<b></div>

                <div class="card-body">
                <form action="{{route('kota.store')}}" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Kota</label>
                        <input type="text" name="kode_kota" class="form-control" id="exampleInputEmail1"> 
                        @if($errors->has('kode_kota'))
                            <span class="text-danger">{{ $errors->first('kode_kota') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kota</label>
                        <input type="text" name="nama_kota" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('nama_kota'))
                            <span class="text-danger">{{ $errors->first('nama_kota') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                        <select name="id_provinsi" class="form-control" id="">
                        @foreach ($provinsi as $data)
                            <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info btn-block"><i class="ik ik-clipboard"></i>Simpan</button>
                </form>
                </div>
        </div>
    </div>
</div>
@endsection
