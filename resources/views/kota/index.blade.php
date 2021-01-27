@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header"><b>TABEL KOTA<b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('kota.create')}}" class="btn btn-primary btn-small float-right" type="submit"><b>Tambah Data</b></a>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">KODE KOTA</th>
                          <th scope="col">NAMA KOTA</th>
                          <th scope="col">NAMA PROVINSI</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ( $kota as $data )
                      <tr>
                      <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->kode_kota }}</td>
                        <td>{{ $data->nama_kota }}</td>
                        <td>{{ $data->provinsi->nama_provinsi }}<td>
                        <form action="{{route('kota.destroy', $data->id)}}" method="POST">
                          <a href="{{route('kota.show', $data->id)}}" class="btn btn-warning">Show</a>
                          <a href="{{route('kota.edit', $data->id)}}" class="btn btn-primary">Edit</a>
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
