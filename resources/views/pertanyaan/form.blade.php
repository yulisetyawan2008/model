@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Pertanyaan</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi Pertanyaan :</label>
                <textarea class="form-control" rows="5" id="isi" placeholder="Masukkan pertanyaan" name="isi"></textarea>
            </div>
            <div class="form-group">
                <label for="penanya_id">Nomor ID Penanya</label>
                <input type="text" class="form-control" id="penanya_id" name="penanya_id">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
   

@endsection