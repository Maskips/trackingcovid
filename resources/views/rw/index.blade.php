@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-header"><b>TABEL RW<b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <a href="{{route('rw.create')}}" class="btn btn-primary btn-small float-right" type="submit"><b>Tambah Data</b></a>
                  <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
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
                          <a href="{{route('rw.show', $data->id)}}" class="btn btn-warning">Show</a>
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
