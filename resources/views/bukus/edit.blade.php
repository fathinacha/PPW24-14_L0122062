@extends('layouts.app')

@section('content')
    <h1>Edit Buku</h1>
    <form action="{{ route('bukus.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="{{ $buku->judul }}" required>
        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" id="penulis" value="{{ $buku->penulis }}" required>
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" value="{{ $buku->penerbit }}" required>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
        <button type="submit">Simpan</button>
    </form>
@endsection