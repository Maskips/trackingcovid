@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-header"><b>TABEL KASUS2<b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('kasus2.create')}}" class="btn btn-primary btn-small float-right" type="submit"><b>Tambah Data</b></a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">PROVINSI</th>
                          <th scope="col">POSITIF</th>
                          <th scope="col">MENINGGAL</th>
                          <th></th>
                          <th scope="col">SEMBUH</th>
                          <th></th>
                          <th scope="col">TANGGAL</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ( $kasus2 as $data )
                      <tr>
                      <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi }}</td>
                        <td>{{ $data->jpositif }}</td>
                        <td>{{ $data->jmeninggal }}<td>
                        <td>{{ $data->jsembuh }}<td>
                        <td>{{ $data->tanggal }}<td>
                        <form action="{{route('kasus2.destroy', $data->id)}}" method="POST">
                          <a href="{{route('kasus2.show', $data->id)}}" class="btn btn-warning">Show</a>
                          <a href="{{route('kasus2.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
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
