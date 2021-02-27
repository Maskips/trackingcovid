@extends('layouts.admin2')

@section('content')
<div class="row" >
  <div class="col-md-12">
    <h4><b>Tabel Provinsi<b></h4>
      <div class="card">
          <div class="card-header"><a href="{{route('provinsi.create')}}" type="submit"><b>TAMBAH DATA</b></a>
            @if (session('message'))
              <div class="alert alert-success" role="alert">
              {{ session('message') }}
              </div>
            @endif
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="advanced_table" class="table table-hover">
              <thead class="theme-dark">
                <tr>
                  <th></th><th></th><th></th>
                  <th scope="col">ID</th>
                  <th></th>
                  <th scope="col">KODE PROVINSI</th>
                  <th></th>
                  <th scope="col">NAMA PROVINSI</th>
                  <th scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
              @php $no = 1; @endphp
              @foreach ( $provinsi as $data )
              <tr>
                <th></th><th></th><th></th>
                <th scope="row">{{ $no++ }}</th>
                <td></td>
                <td>{{ $data->kode_provinsi }}</td>
                <td></td>
                <td>{{ $data->nama_provinsi }}<td>
                  
                <form action="{{route('provinsi.destroy', $data->id)}}" method="POST">
                  <!-- <a href="{{route('provinsi.show', $data->id)}}" class="btn btn-warning">Show</a> -->
                  <a href="{{route('provinsi.edit', $data->id)}}" type="button" class="btn outline-dark" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah">
                    <h4><i class="fas fa-edit"></i></h4></a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda Yakin ?')" class="btn outline-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus">
                    <h4><i class="fas fa-trash-alt"></i></h4></button>
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