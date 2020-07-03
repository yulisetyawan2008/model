@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/jawaban" method="POST">
            @csrf
            <div class="form-group">
                <label for="isi">Isi Jawaban :</label>
                <textarea class="form-control" rows="5" id="isi" placeholder="Masukkan pertanyaan" name="isi"></textarea>
            </div>
            <div class="form-group">
                <label for="penanya_id">Nomor ID Penanya</label>
                <input type="text" class="form-control" id="penanya_id" name="penanya_id">
            </div>
            <div class="form-group">
                <label for="is_selected">is_selected</label>
                <input type="text" class="form-control" id="is_selected" name="is_selected">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
   

@endsection