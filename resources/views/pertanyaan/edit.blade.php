@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Pertanyaan</label>
                    <input type="text" class="form-control" id="judul" name = "judul" value="{{$pertanyaan->judul}}" placeholder="Judul Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label for="isi">Masukkan Pertanyaan</label>
                    <input type="text" class="form-control" id="isi" name = "isi" value="{{$pertanyaan->isi}}" placeholder="Isi Pertanyaan">
                  </div>
                  <input hidden type="text" name="tanggal_dibuat" value="{{$pertanyaan->tanggal_dibuat}}">
                  <input hidden type="text" name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>


@endsection