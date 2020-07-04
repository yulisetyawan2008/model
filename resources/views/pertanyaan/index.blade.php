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
                        <th>Nomor ID Penanya</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaan as $key => $pertanyaan)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td> <a href="jawaban/{{$pertanyaan->id}}"> {{ $pertanyaan->judul }} <a></td>
                        <td>{{ $pertanyaan->isi }}</td>
                        <td>{{ $pertanyaan->penanya_id }}</td>  
                        <td>
                            <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-sm btn-info">Show </a>
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