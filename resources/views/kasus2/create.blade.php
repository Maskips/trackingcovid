@extends('layouts.admin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div class="card-header"><b>CREATE DATA KASUS2<b></div>

                <div class="card-body">
                <form action="{{route('kasus2.store')}}" method="POST">
                @csrf
                <div class="flex flex-col justify-around h-full">
                @livewire('dropdowns')
                </div>
                    <br>
                    <div class="mb-3">
                        <label for="" class="form-label"><h4><b>TOTAL KASUS LOCAL</b></h4></label>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Positif</label>
                        <input type="number" name="jpositif" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('jpositif'))
                            <span class="text-danger">{{ $errors->first('jpositif') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Meninggal</label>
                        <input type="number" name="jmeninggal" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('jmeninggal'))
                            <span class="text-danger">{{ $errors->first('jmeninggal') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sembuh</label>
                        <input type="number" name="jsembuh" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('jsembuh'))
                            <span class="text-danger">{{ $errors->first('jsembuh') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('tanggal'))
                            <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                        @endif
                    </div>
                    </div>
                        <button type="submit" class="btn btn-info btn-block"><i class="ik ik-clipboard"></i>Simpan</button>
                </form>
                </div>
        </div>
    </div>
</div>
@endsection
