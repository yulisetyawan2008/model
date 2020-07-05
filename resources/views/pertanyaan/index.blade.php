@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
    <h1>Daftar Pertanyaan</h1>
        <a href="/pertanyaan/create" class="btn btn-primary">
            Tambah Pertanyaan
        </a>
        <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Pertanyaan</th>
                        <th>Isi Pertanyaan</th>
                        
                        <th>Form Jawaban</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pertanyaan as $pertanyaan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pertanyaan->judul }}</td>
                        <td>{{ $pertanyaan->isi }}</td>  
                      
                        <td>
                            <form action="{{ url('/jawaban/'.$pertanyaan->id) }}" method="POST">
                                @csrf
                                <input type="text" name="isi">
                                <input hidden name="pertanyaan_id" value="{{ $pertanyaan->id}}">
                                <input hidden name="tanggal_dibuat" value="{{ \Carbon\Carbon::now() }}">
                                <input hidden name="tanggal_diperbaharui" value="{{ \Carbon\Carbon::now() }}">
                                <button type="submit" class="btn btn-success">Jawab</button>
                            </form>
                            <a href="/jawaban/{{$pertanyaan->id}}" class="btn btn-sm btn-success">Lihat </a>
                        </td>
                        <td>
                            <!-- <a href="/jawaban/{{$pertanyaan->id}}" class="btn btn-sm btn-success">Jawab </a> -->
                            <a href="{{ url ('/pertanyaan/'.$pertanyaan->id) }}" class="btn btn-sm btn-primary">Lihat QnA </a>
                            <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-sm btn-default">Edit </a>
                            <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" style="display: inline">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>          
                    </tr>
                    @endforeach
                </tbody>
        </table>
       
    </div>
    
    
@endsection