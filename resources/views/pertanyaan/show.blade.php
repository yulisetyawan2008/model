@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail Pertanyaan</h3>
        <p>Judul Pertanyaan : {{ $pertanyaan->judul}}</p>
        <p>Isi Pertanyaan : {{ $pertanyaan->isi}}</p>
        <p>Nomor ID Penanya : {{ $pertanyaan->penanya_id}}</p>
    </div>

@endsection