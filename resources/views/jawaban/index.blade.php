@extends('adminlte.master')

@section('content')
<!-- menampilkan pertanyaan -->
    <div class="card ml-3 mt-3 card-primary">
        <div class="card-header">
            <h3 class="card-title">Pertanyaan</h3>
        </div>
            <!-- card header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Isi Pertanyaan</th>
                        <th>Nomor ID Penanya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $pertanyaan->judul}}</td>
                        <td>{{ $pertanyaan->isi}}</td>
                        <td>{{ $pertanyaan->penanya_id}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!-- menampilkan form jawaban -->
   
   <div class=" card card-primary mt-3 ml-3">
        <div class="card-header">
            <h3 class="card-title">Jawaban Anda</h3>
        </div>
        <div>
            <form role="form" action="/jawaban/{pertanyaan_id}" method="POST">
            @csrf 
                <div class="card-body">
                    <div class="form-group">
                        <label for="isi">Isi di sini :</label>
                        <textarea class="form-control" rows="5" id="isi" placeholder="Masukkan jawaban anda" name="isi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan_id">ID Pertanyaan</label>
                        <input class="form-control" type="number" name="pertanyaan_id" id="pertanyaan_id" value="{$pertanyaan_id}">
                    </div>
                    <div class="form-group">
                        <label for="is_selected">ID Pertanyaan</label>
                        <input class="form-control" type="number" name="is_selected" id="is_selected" value=1 >
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>            
                </div>
            </form>
        </div>
        
   </div>
    
@endsection