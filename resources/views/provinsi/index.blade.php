@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-header"><h3><b>TABEL PROVINSI<b></h3></div>
          <div class="card-body">
          <a href="{{route('provinsi.create')}}" type="submit"><b>TAMBAH DATA</b></a>
            @if (session('message'))
              <div class="alert alert-success" role="alert">
              {{ session('message') }}
              </div>
            @endif
            <div class="table-responsive">
            <table id="data_table" class="table">
              <thead class="theme-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">KODE PROVINSI</th>
                  <th scope="col">NAMA PROVINSI</th>
                  <th scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
              @php $no = 1; @endphp
              @foreach ( $provinsi as $data )
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $data->kode_provinsi }}</td>
                <td>{{ $data->nama_provinsi }}<td>
                <form action="{{route('provinsi.destroy', $data->id)}}" method="POST">
                  <!-- <a href="{{route('provinsi.show', $data->id)}}" class="btn btn-warning">Show</a> -->
                  <a href="{{route('provinsi.edit', $data->id)}}" class="btn btn-primary">Edit</a>
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