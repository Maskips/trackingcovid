@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div class="card-header"><b>CREATE DATA RW<b></div>

                <div class="card-body">
                <form action="{{route('rw.store')}}" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Rw</label>
                        <input type="number" name="nama_rw" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('nama_rw'))
                            <span class="text-danger">{{ $errors->first('nama_rw') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                        <select name="id_kelurahan" class="form-control" id="">
                        @foreach ($kelurahan as $data)
                            <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
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
