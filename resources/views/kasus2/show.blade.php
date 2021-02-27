@extends('layouts.admin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card-header"><b>SHOW DATA KASUS2<b></div>

                <div class="card-body">
                @csrf
                <div class="mb-3" readonly>
                @livewire('dropdowns', ['selectedRw'=>$kasus2->id_rw, 'selectedKelurahan'=>$kasus2->rw->id_kelurahan,
                'selectedKecamatan'=>$kasus2->rw->kelurahan->id_kecamatan, 'selectedKota'=>$kasus2->rw->kelurahan->kecamatan->id_kota,
                'selectedProvinsi'=>$kasus2->rw->kelurahan->kecamatan->kota->id_provinsi])
                </div>    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Positif</label>
                        <input type="number" name="jpositif" value="{{$kasus2->jpositif}}" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Meninggal</label>
                        <input type="number" name="jmeninggal" value="{{$kasus2->jmeninggal}}" class="form-control" readonly>
                    </div
                    ><div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sembuh</label>
                        <input type="number" name="jsembuh" value="{{$kasus2->jsembuh}}" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" value="{{$kasus2->tanggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">KEMBALI</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
