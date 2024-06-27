@extends('layouts.app')

@section('content')
    <a href="{{ route('bukus.create') }}">Tambah Buku</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bukus as $index => $buku)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tahun_terbit }}</td>
                    <td>
                        @if($buku->gambar)
                        <img src="{{ asset('storage/' . $buku->gambar) }}" alt="Gambar {{ $buku->judul }}" style="max-width: 100px;">
                        @else
                            Belum ada gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('bukus.edit', $buku->id) }}">Edit</a>
                        <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" style="display:inline;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirmDelete()">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script type="text/javascript">
        function confirmDelete() {
            return confirm('Apakah Anda yakin ingin menghapus buku ini?');
        }
    </script>
@endsection
