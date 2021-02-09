@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-header"><h3><b>TABEL KOTA<b></h3></div>
          <div class="card-body">
          <a href="{{route('kota.create')}}" type="submit"><b>TAMBAH DATA</b></a>
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
                          <!-- <a href="{{route('kota.show', $data->id)}}" class="btn btn-warning">Show</a> -->
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
