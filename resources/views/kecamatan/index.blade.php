@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-header"><h3><b>TABEL KECAMATAN<b></h3></div>
          <div class="card-body">
          <a href="{{route('kecamatan.create')}}" type="submit"><b>TAMBAH DATA</b></a>
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
                          {{-- <th scope="col">KODE KECAMATAN</th> --}}
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
                        {{-- <td>{{ $data->kode_kecamatan }}</td> --}}
                        <td>{{ $data->nama_kecamatan }}</td>
                        <td>{{ $data->kota->nama_kota }}<td>
                        <form action="{{route('kecamatan.destroy', $data->id)}}" method="POST">
                          <!-- <a href="{{route('kecamatan.show', $data->id)}}" class="btn btn-warning">Show</a> -->
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
