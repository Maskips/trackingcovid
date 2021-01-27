@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>EDIT DATA RW<b></div>

                <div class="card-body">
                <form action="{{route('rw.update', $rw->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Rw</label>
                        <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                        <select name="id_kelurahan" class="form-control" id="">
                        @foreach ($kelurahan as $data)
                            <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
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
