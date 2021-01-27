@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header"><b>TABEL KECAMATAN<b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('kecamatan.create')}}" class="btn btn-primary btn-small float-right" type="submit"><b>Tambah Data</b></a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">KODE KECAMATAN</th>
                          <th scope="col">NAMA KECAMATAN</th>
                          <th scope="col">NAMA KOTA</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ( $kecamatan as $data )
                      <tr>
                      <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->kode_kecamatan }}</td>
                        <td>{{ $data->nama_kecamatan }}</td>
                        <td>{{ $data->kota->nama_kota }}<td>
                        <form action="{{route('kecamatan.destroy', $data->id)}}" method="POST">
                          <a href="{{route('kecamatan.show', $data->id)}}" class="btn btn-warning">Show</a>
                          <a href="{{route('kecamatan.edit', $data->id)}}" class="btn btn-primary">Edit</a>
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
