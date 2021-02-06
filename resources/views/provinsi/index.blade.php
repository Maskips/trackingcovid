@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header"><b>TABEL PROVINSI<b></div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                  <a href="{{route('provinsi.create')}}" class="btn btn-primary btn-small float-right" type="submit"><b>Tambah Data</b></a><br><br>
                  <div class="card-body">
                  <div class="table-responsive" >
                  <table class="table table-bordered" id="datatable">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">KODE PROVINSI</th>
                          <th scope="col">NAMA PROVINSI</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead>
                    <tbody>
                      @php $no = 1; @endphp
                      @foreach ( $provinsi as $data )
                      <tr>
                      <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->kode_provinsi }}</td>
                        <td>{{ $data->nama_provinsi }}</td>
                        <td>
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
