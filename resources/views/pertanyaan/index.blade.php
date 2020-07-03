@extends('adminlte.master')

@section('content')
    <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Pertanyaan</th>
                    <th>Isi Pertanyaan</th>
                    <th>Nomor ID Pertanyaan</th>

                </tr>
            </thead>
            <tbody>
                @foreach($pertanyaan as $key => $tanya)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $tanya->judul }}</td>
                    <td>{{ $tanya->isi }}</td>
                    <td>{{ $tanya->penanya_id }}</td>            
                </tr>
                @endforeach
            </tbody>
    </table>
@endsection