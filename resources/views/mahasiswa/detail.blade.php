@extends('mahasiswa.layout.app')
@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <p>Nama: {{ $mhs['nama'] }}</p>
    <p>NIM: {{ $mhs['nim'] }}</p>
    <p>IPK: {{ $mhs['ipk'] }}</p>
    <p>Prodi: {{ $mhs['prodi'] }}</p>
    <a href="{{ route('mahasiswa.daftar') }}">Kembali ke Daftar</a>
@endsection