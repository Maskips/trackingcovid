@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>CREATE DATA PROVINSI<b></div>
                <div class="card-body">
                <form action="{{route('provinsi.store')}}" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="" >Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" class="form-control" id="exampleInputEmail1">
                        @if($errors->has('kode_provinsi'))
                            <span class="text-danger">{{ $errors->first('kode_provinsi') }}</span>
                        @endif 
                    </div>
                    <div class="mb-3">
                    <!-- <label for="" >Nama Provinsi</label>
                    <select name="province" id="" class="form-control">
                        <option value="">Pilih Provinsi</option>
                        @foreach ($provinces as $data)
                        <option value="{{$data->id}}">{{ $data->name }}</option>
                        @endforeach
                    </select> -->

                    <label for="" >Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" class="form-control" id="exampleInputEmail1">
                        @if($errors->has('nama_provinsi'))
                            <span class="text-danger">{{ $errors->first('nama_provinsi') }}</span>
                        @endif
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection
