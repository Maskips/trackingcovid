@extends('layouts.admin')

@section('content')
<div class="row" >
  <div class="col-md-12">
    <h4><b>Tabel Kelurahan<b></h4>
      <div class="card">
          <div class="card-header"><a href="{{route('kelurahan.create')}}" type="submit"><b>TAMBAH DATA</b></a>
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
                          {{-- <th scope="col">KODE</th> --}}
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
                        {{-- <td>{{ $data->kode_kelurahan }}</td> --}}
                        <td>{{ $data->nama_kelurahan }}<td>
                        <td>{{ $data->kecamatan->nama_kecamatan }}<td>
                        <form action="{{route('kelurahan.destroy', $data->id)}}" method="POST">
                          <!-- <a href="{{route('kelurahan.show', $data->id)}}" class="btn btn-warning">Show</a> -->
                          <a href="{{route('kelurahan.edit', $data->id)}}" type="button" class="btn outline-dark" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah">
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
