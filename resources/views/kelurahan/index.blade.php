@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header"><b>TABEL KELURAHAN<b></div>
                <div class="card-body">
                <a href="{{route('kelurahan.create')}}" type="submit"><b>Tambah Data</b></a>
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
                          <th scope="col">KODE</th>
                          <th scope="col">KELURAHAN</th>
                          <th scope="col"></th>
                          <th scope="col">KECAMATAN</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ( $kelurahan as $data )
                      <tr>
                      <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->kode_kelurahan }}</td>
                        <td>{{ $data->nama_kelurahan }}<td>
                        <td>{{ $data->kecamatan->nama_kecamatan }}<td>
                        <form action="{{route('kelurahan.destroy', $data->id)}}" method="POST">
                          <!-- <a href="{{route('kelurahan.show', $data->id)}}" class="btn btn-warning">Show</a> -->
                          <a href="{{route('kelurahan.edit', $data->id)}}" class="btn btn-primary">Edit</a>
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
