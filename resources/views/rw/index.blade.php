@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-header"><h3><b>TABEL RW<b></h3></div>
          <div class="card-body">
          <a href="{{route('rw.create')}}" type="submit"><b>TAMBAH DATA</b></a>
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
                          <th scope="col">NAMA RW</th>
                          <th scope="col">NAMA KELURAHAN</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ( $rw as $data )
                      <tr>
                      <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->nama_rw }}</td>
                        <td>{{ $data->kelurahan->nama_kelurahan }}<td>
                        <form action="{{route('rw.destroy', $data->id)}}" method="POST">
                          <!-- <a href="{{route('rw.show', $data->id)}}" class="btn btn-warning">Show</a> -->
                          <a href="{{route('rw.edit', $data->id)}}" class="btn btn-primary">Edit</a>
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
