@extends('layouts.admin2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2><b>SELAMAT DATANG</b></h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3><b>TrackingKopid.</b></h3>
                    <h5>Adalah salah satu Website yang memberikan Informasi peningkatan dan penyebaran 
                        Data kasus Covid-19 Di Indonesia yang berdasarkan Provinsi dan juga Data kasus Covid-19 di Dunia.
                         </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
