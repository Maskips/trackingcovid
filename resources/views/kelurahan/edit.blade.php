@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div class="card-header"><b>EDIT DATA KELURAHAN<b></div>

                <div class="card-body">
                <form action="{{route('kelurahan.update', $kelurahan->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Kelurahan</label>
                        <input type="text" name="kode_kelurahan" value="{{$kelurahan->kode_kelurahan}}" class="form-control" required> 
                    </div> --}}
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                        <select name="id_kecamatan" class="form-control" id="">
                        @foreach ($kecamatan as $data)
                            <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
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
