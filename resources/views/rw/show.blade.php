@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>SHOW DATA RW<b>
                <div class="card-body">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Rw</label>
                        <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" value="{{$rw->kelurahan->nama_kelurahan}}" class="form-control" readonly>
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
