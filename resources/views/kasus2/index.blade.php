@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h4><b>Kasus Local<b></h4>
      <div class="card">
          <div class="card-header">
            <a href="{{route('kasus2.create')}}" type="submit"><b>TAMBAH DATA</b></a>
            @if (session('message'))
              <div class="alert alert-success" role="alert">
              {{ session('message') }}
              </div>
            @endif
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <table id="data_table" class="table table-hover">
              <thead class="theme-dark">
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
                        <a><b>Prov : </a>{{ $data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi }} <br>
                        <a>Kota : </a>{{ $data->rw->kelurahan->kecamatan->kota->nama_kota }} <br>
                        <a>Kec : </a>{{ $data->rw->kelurahan->kecamatan->nama_kecamatan }} <br>
                        <a>Kel : </a>{{ $data->rw->kelurahan->nama_kelurahan }} <br>
                        <a>Rw : </a>{{ $data->rw->nama_rw }}</b> 
                        </td>
                        <th>{{ number_format($data->jpositif) }}</th>
                        <th>{{ number_format($data->jmeninggal) }}</th>
                        <th>{{ number_format($data->jsembuh) }}</th>
                        <th>{{ date("d F Y", strtotime($data->tanggal)) }}</th>
                        <th>
                        <form action="{{route('kasus2.destroy', $data->id)}}" method="POST">
                          <a href="{{route('kasus2.edit', $data->id)}}" type="button" class="btn outline-dark" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah">
                          <h4><i class="fas fa-edit"></i></h4></a>
                          @csrf
                          @method('DELETE')
                          
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin ?')" class="btn outline-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                            <h4><i class="fas fa-trash-alt"></i></h4></button>
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
