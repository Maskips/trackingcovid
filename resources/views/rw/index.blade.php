@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header"><b>TABEL RW<b></div>
                <div class="card-body">
                <a href="{{route('rw.create')}}" type="submit"><b>Tambah Data</b></a>
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
