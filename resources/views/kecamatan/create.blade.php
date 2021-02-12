@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div class="card-header"><b>CREATE DATA KECAMATAN<b></div>

                <div class="card-body">
                <form action="{{route('kecamatan.store')}}" method="POST">
                @csrf
                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Kecamatan</label>
                        <input type="number" name="kode_kecamatan" class="form-control" id="exampleInputEmail1"> 
                        @if($errors->has('kode_kecamatan'))
                            <span class="text-danger">{{ $errors->first('kode_kecamatan') }}</span>
                        @endif
                    </div> --}}
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('nama_kecamatan'))
                            <span class="text-danger">{{ $errors->first('nama_kecamatan') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kota</label>
                        <select name="id_kota" class="form-control" id="">
                        @foreach ($kota as $data)
                            <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">SIMPAN</button>
                </form>
                </div>
        </div>
    </div>
</div>
@endsection
