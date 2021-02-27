@extends('layouts.admin2')

@section('content')
<div class="row" >
  <div class="col-md-12">
    <h4><b>Tabel Kota<b></h4>
      <div class="card">
          <div class="card-header"><a href="{{route('kota.create')}}" type="submit"><b>TAMBAH DATA</b></a>
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
                          <th></th>
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
                      <th></th>
                      <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->kode_kota }}</td>
                        <td>{{ $data->nama_kota }}</td>
                        <td>{{ $data->provinsi->nama_provinsi }}<td>
                        <form action="{{route('kota.destroy', $data->id)}}" method="POST">
                          <!-- <a href="{{route('kota.show', $data->id)}}" class="btn btn-warning">Show</a> -->
                          <a href="{{route('kota.edit', $data->id)}}" type="button" class="btn outline-dark" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah">
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
