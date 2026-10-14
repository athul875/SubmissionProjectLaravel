@extends('mahasiswa.layout.app')
@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    @php
        $adaIpkRendah = collect($mahasiswa)->contains(fn($m) => $m['ipk'] < 2.0);
    @endphp

    @if($adaIpkRendah)
        <x-alert tipe="bahaya">
            Terdapat mahasiswa dengan IPK dibawah 2.0!
        </x-alert>
    @endif

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        @forelse($mahasiswa as $mhs)
            <tr>
            
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['ipk'] }}</td>
                <td>
                    @if($mhs['ipk'] >= 3.5) Cum Laude
                    @elseif($mhs['ipk'] >= 3.0) Baik
                    @else Perlu Ditingkatkan
                    @endif
                </td>
                <td><a href="{{ route('mahasiswa.detail', $mhs['nim']) }}">Detail</a></td>
            </tr>
        @empty
            <tr><td colspan="6">Belum ada data mahasiswa.</td></tr>
        @endforelse
    </table>
@endsection