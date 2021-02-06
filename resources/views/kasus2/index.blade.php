@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header"><b>TABEL KASUS2<b></div>
                <div class="card-body">
                <a href="{{route('kasus2.create')}}" type="submit"><b>Tambah Data</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div class="card-body">
                  <div class="table-responsive">
                  <table class="table table-bordered" id="datatable">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">LOKASI</th>
                          <th scope="col">POSITIF</th>
                          <th scope="col">MENINGGAL</th>
                          <th scope="col">SEMBUH</th>
                          <th scope="col">TANGGAL</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ( $kasus2 as $data )
                      <tr>
                      <th scope="row">{{ $no++ }}</th>
                        <td>
                        <a>Prov : </a>{{ $data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi }} <br>
                        <a>Kota : </a>{{ $data->rw->kelurahan->kecamatan->kota->nama_kota }} <br>
                        <a>Kec : </a>{{ $data->rw->kelurahan->kecamatan->nama_kecamatan }} <br>
                        <a>Kel : </a>{{ $data->rw->kelurahan->nama_kelurahan }} <br>
                        <a>Rw : </a>{{ $data->rw->nama_rw }} 
                        </td>
                        <th>{{ $data->jpositif }}</th>
                        <th>{{ $data->jmeninggal }}</th>
                        <th>{{ $data->jsembuh }}</th>
                        <th>{{ $data->tanggal }}</th>
                        <th>
                        <form action="{{route('kasus2.destroy', $data->id)}}" method="POST">
                          <!-- <a href="{{route('kasus2.show', $data->id)}}" class="btn btn-warning">Show</a> -->
                          <a href="{{route('kasus2.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger">Delete</button>
                        </form>
                        </th>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
