@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Isi Jawaban</th>
                <th>Penanya ID</th>
                <th>is_selected</th>

            </tr>
        </thead>
        <tbody>
            @foreach($jawaban as $key => $jawab)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $jawab->isi }}</td>
                <td>{{ $jawab->penanya_id }}</td>
                <td>{{ $jawab->is_selected }}</td>            
            </tr>
            @endforeach
        </tbody>
  </table>
@endsection